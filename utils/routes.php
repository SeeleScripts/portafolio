<?php

use Slim\App;

return function (App $app) {
	foreach (glob(__DIR__ . '/routes/*.php') as $routeFile) {
		$route = require $routeFile;
		$route($app);
	}
};
