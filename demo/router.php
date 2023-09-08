<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	'/demo' => 'controllers/index.php',
	'/demo/about' => 'controllers/about.php',
	'/demo/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes)
{
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
}

function abort($status = 404)
{
	http_response_code($status);
	require("views/$status.php");

	die();
}

routeToController($uri, $routes);