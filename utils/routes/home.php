<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Views\PhpRenderer;
use Psr\Log\LoggerInterface;

return function (App $app) {
	$container = $app->getContainer();
	$view = $container->get(PhpRenderer::class);
	$logger = $container->get(LoggerInterface::class);

	// Root route: detect locale and redirect to /{locale}/
	$app->get('/', function (Request $request, Response $response) use (
		$logger
	) {
		$locale = Translator::detectLocale();
		$logger->info('Root access, redirecting to locale', [
			'locale' => $locale,
		]);
		return $response
			->withHeader('Location', '/' . $locale . '/')
			->withStatus(302);
	});

	// Localized home route: /{locale}[/]
	$app->get('/{locale}[/]', function (
		Request $request,
		Response $response,
		array $args
	) use ($view, $logger) {
		$locale = $args['locale'] ?? 'en';

		// Validate locale, fallback to en
		if (!in_array($locale, Translator::SUPPORTED_LOCALES, true)) {
			return $response->withHeader('Location', '/en/')->withStatus(302);
		}

		// Set language cookie (1 year)
		setcookie(Translator::COOKIE_NAME, $locale, [
			'expires' => time() + 60 * 60 * 24 * 365,
			'path' => '/',
			'httponly' => true,
			'samesite' => 'Lax',
		]);

		$translator = new Translator($locale);
		$logger->info('User accessed home page', ['locale' => $locale]);
		$logger->info('Translator', ['translator' => $translator]);

		$page_data = [
			'active' => 'home',
			'ajax_nonce' => Nonce::generate('send_email'),
			'lang' => $locale,
			'translator' => $translator,
		];

		session_write_close();
		$logger->debug('Page data', ['locale' => $locale]);
		return $view->render($response, 'home.php', $page_data);
	});
};
