<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Jenssegers\Blade\Blade;

return function (Slim\App $app) {


    function view(Response $response, $template, $with = [])
    {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;
    }

    $app->get('/home', function (Request $request, Response $response, $args) {
        $name = 'Slim';
        return view($response, 'auth.home', compact('name'));
    });

    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
    });

    $app->get('/test', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello test world!");
        return $response;
    });

};