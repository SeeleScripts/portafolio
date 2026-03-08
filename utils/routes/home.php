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

	$app->get('/', function (Request $request, Response $response, $args) use (
		$view,
		$logger
	) {
		$logger->info('User accessed the home page');
		$page_data = [
			'active' => 'home',
			'ajax_nonce' => Nonce::generate('send_email'),
		];
		session_write_close();
		$logger->debug('Page data', $page_data);
		return $view->render($response, 'home.php', $page_data);
	});
};
