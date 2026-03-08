<?php
session_start();
// Initial setup

require_once 'vendor/autoload.php';
define('ROOT', __DIR__);
define('MODE_DEV', '%MODE%' === 'development');

require_existing('configs/env.php');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Middleware\ErrorMiddleware;
use Middlewares\TrailingSlash;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\JsonFormatter;
use Psr\Log\LoggerInterface;
use DI\Container;
use Dotenv\Dotenv;

require_existing('utils/Nonce.php');
require_existing('utils/EmailSender.php');

// ✅ Load Environment Variables
// $dotenv = Dotenv::createImmutable(__DIR__ . '/');
// $dotenv->safeLoad(); // Use safeLoad() to avoid errors if .env is missing

// ✅ Create Container
$container = new Container();

// ✅ Register Logger
$container->set(LoggerInterface::class, function () {
	$logger = new Logger('app');
	$formatter = new JsonFormatter();
	$stream_handler = new StreamHandler(
		__DIR__ . '/logs/app.log',
		Logger::DEBUG,
	);
	$stream_handler->setFormatter($formatter);
	$logger->pushHandler($stream_handler);
	return $logger;
});

// ✅ Register View Renderer
$container->set(PhpRenderer::class, function () {
	return new PhpRenderer(__DIR__ . '/views');
});

AppFactory::setContainer($container);
$app = AppFactory::create();

// ✅ Apply Middleware
$app->add(new TrailingSlash(true));
$app->addRoutingMiddleware();

// ✅ Load Routes (Logger is accessible in routes)
$routes = require __DIR__ . '/utils/routes.php';
$routes($app);

// ✅ Load and Register Custom 404 Error Handler
$customErrorHandler = require __DIR__ . '/utils/404_handler.php';
$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$errorMiddleware->setDefaultErrorHandler($customErrorHandler);

// ✅ Run the app
$app->run();
