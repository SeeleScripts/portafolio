<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Log\LoggerInterface;

return function (App $app) {
	$container = $app->getContainer();
	$logger = $container->get(LoggerInterface::class);

	$app->post('/ajax-handler[/]', function (
		Request $request,
		Response $response,
		$args
	) use ($logger) {
		$logger->info('User send an ajax request');

		$rawBody = $request->getBody()->__toString();
		$data = json_decode($rawBody, true) ?? [];

		$logger->debug('raw body', ['body' => $rawBody]);
		$logger->debug('Nonce from data', ['nonce' => $data['nonce']]);
		$logger->debug('Action from data', ['action' => $data['action']]);
		$nonce = $data['nonce'] ?? '';
		$action = $data['action'] ?? '';

		$logger->debug('Session nonce', [
			'expected' => $_SESSION['nonces'][$action] ?? null,
			'actual' => $nonce,
			'all_nonces' => $_SESSION['nonces'] ?? [],
		]);

		if (!Nonce::verify($nonce, $action)) {
			$response
				->getBody()
				->write(json_encode(['error' => 'Invalid nonce']));
			return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(403);
		}

		$result = match ($action) {
			'send_email' => EmailSender::send($data),
			default => ['error' => 'Unknown action'],
		};

		$response->getBody()->write(json_encode($result));
		return $response->withHeader('Content-Type', 'application/json');
	});
};
