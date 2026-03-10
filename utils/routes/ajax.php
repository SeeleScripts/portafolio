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
		$logger->info('User sent an ajax request');

		$rawBody = $request->getBody()->__toString();
		$data = json_decode($rawBody, true) ?? [];

		$nonce  = $data['nonce'] ?? '';
		$action = $data['action'] ?? '';

		$logger->debug('Ajax request', [
			'action' => $action,
			'nonce'  => substr($nonce, 0, 8) . '...',
		]);

		// ── 1. Nonce verification ───────────────────────────────────────
		if (!Nonce::verify($nonce, $action)) {
			$response->getBody()->write(json_encode(['error' => 'Invalid nonce']));
			return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(403);
		}

		// ── 2. Turnstile verification ──────────────────────────────────
		$turnstileToken = $data['turnstileToken'] ?? '';

		if (empty($turnstileToken)) {
			$response->getBody()->write(json_encode(['error' => 'Captcha token missing']));
			return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(422);
		}

		$tsVerify = verifyTurnstile($turnstileToken, $request);

		if (!$tsVerify) {
			$logger->warning('Turnstile verification failed');
			$response->getBody()->write(json_encode(['error' => 'Captcha verification failed']));
			return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(422);
		}

		// ── 3. Dispatch action ─────────────────────────────────────────
		$result = match ($action) {
			'send_email' => EmailSender::send($data),
			default      => ['error' => 'Unknown action'],
		};

		$response->getBody()->write(json_encode($result));
		return $response->withHeader('Content-Type', 'application/json');
	});
};

/**
 * Verify a Cloudflare Turnstile token server-side.
 */
function verifyTurnstile(string $token, Request $request): bool
{
	$secret = VITE_SITE_TURNSTILE_SECRET;

	// Get client IP from request
	$serverParams = $request->getServerParams();
	$ip = $serverParams['HTTP_X_FORWARDED_FOR']
		?? $serverParams['REMOTE_ADDR']
		?? '';

	$postData = http_build_query([
		'secret'   => $secret,
		'response' => $token,
		'remoteip' => $ip,
	]);

	$context = stream_context_create([
		'http' => [
			'method'  => 'POST',
			'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
			'content' => $postData,
			'timeout' => 5,
		],
	]);

	$result = @file_get_contents(
		'https://challenges.cloudflare.com/turnstile/v0/siteverify',
		false,
		$context,
	);

	if ($result === false) {
		return false;
	}

	$json = json_decode($result, true);
	return ($json['success'] ?? false) === true;
}
