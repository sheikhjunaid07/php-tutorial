<?php

//get base path if query string available
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/"       => "http://localhost/junaidphp/laracasts-php/page-links/controllers/index.php",
    "/about"  => "http://localhost/junaidphp/laracasts-php/page-links/controllers/about.php",
    "/contact"=> "http://localhost/junaidphp/laracasts-php/page-links/controllers/contact.php"
];


function routeToController($uri, $routes){

    if(array_key_exists($uri, $routes)) {   //check that array key us exists or not (predefined function)  //key is uri, array is routes
        require $routes[$uri];
    } else {
       abort();
    }

}

function abort($code = 404){

    http_response_code(404); //predefined function
    
    require("views/{$code}.php");
    
    echo "Sorry, Not Found";

    die();
}

routeToController($uri, $routes);
