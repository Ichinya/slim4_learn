<?php

/**
 * Глобальные функции
 */

use Psr\Http\Message\ResponseInterface as Response;
use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
    function view(Response $response, $template, $with = []): Response
    {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;
    }
}