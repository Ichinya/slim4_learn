<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http\Controllers\WelcomeController;

return function (Slim\App $app) {


//    $app->get('/home', function (Request $request, Response $response, $args) {
//        $name = 'Slim';
//        return view($response, 'auth.home', compact('name'));
//    });

    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}', [WelcomeController::class, 'show']);

//    $app->get('/test', function (Request $request, Response $response, $args) {
//        $response->getBody()->write("Hello test world!");
//        return $response;
//    });

};