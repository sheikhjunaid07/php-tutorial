<?php

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Strip the base path (/junaidphp/notes-app) from the URI
$basePath = '/junaidphp/notes-app';
if (str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath));
}

routeToController($uri, $routes);
