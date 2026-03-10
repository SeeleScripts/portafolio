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

	// Localized work route: /{locale}/work/{slug}[/]
	$app->get('/{locale}/work/{slug}[/]', function (
		Request $request,
		Response $response,
		array $args
	) use ($view, $logger) {
		$locale = $args['locale'] ?? 'en';
		$slug = $args['slug'];

		// Validate locale, fallback to en
		if (!in_array($locale, Translator::SUPPORTED_LOCALES, true)) {
			return $response
				->withHeader('Location', '/en/work/' . $slug . '/')
				->withStatus(302);
		}

		$translator = new Translator($locale);
		$logger->info('User accessed work page', [
			'locale' => $locale,
			'slug' => $slug,
		]);

		// For now, pass basic data to the view
		$page_data = [
			'active' => 'work',
			'slug' => $slug,
			'lang' => $locale,
			'translator' => $translator,
		];

		session_write_close();
		return $view->render($response, 'work.php', $page_data);
	});
};
