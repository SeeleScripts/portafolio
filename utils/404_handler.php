<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;
use Slim\Views\PhpRenderer;
use Psr\Log\LoggerInterface;
use Slim\App;

return function (
	Request $request,
	Throwable $exception,
	bool $displayErrorDetails,
	bool $logErrors,
	bool $logErrorDetails
) use ($app) {
	$container = $app->getContainer();
	$view = $container->get(PhpRenderer::class); // Get the View Renderer
	$logger = $container->get(LoggerInterface::class); // Get the Logger

	$response = new \Slim\Psr7\Response();

	// ✅ Handle 404 Not Found
	if ($exception instanceof HttpNotFoundException) {
		$logger->warning('404 Not Found: ' . (string) $request->getUri()); // Log 404 errors
		$page_data = [
			'ajax_nonce' => Nonce::generate('send_email'),
		];
		return $view->render($response->withStatus(404), '404.php', $page_data);
	}

	// ✅ Handle Other Errors (500, etc.)
	$logger->error('Unexpected Error: ' . $exception->getMessage()); // Log other errors
	$response->getBody()->write('Something went wrong!');
	return $response->withStatus(500);
};
