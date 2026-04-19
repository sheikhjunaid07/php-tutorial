<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Strip the base path so routes match cleanly
$basePath = '/junaidphp/notes-app';
$uri = str_replace($basePath, '', $uri);

// Normalize: empty or just index.php = home
if ($uri === '' || $uri === '/index.php' || $uri === '/') {
    $uri = '/';
} else {
    // Remove trailing slash
    $uri = rtrim($uri, '/');
}

$routes = require("routes.php");

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
       abort();
    }
}

function abort($code = 404){
    http_response_code(404);
    require "views/{$code}.php";
    
    die();
}


routeToController($uri, $routes);
