<?php

namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
    /** @var array $middleware Global Middleware */
    public array $middleware = [
//        Middleware\ExampleBeforeMiddleware::class,
//        Middleware\ExampleAfterMiddleware::class
    ];

    /** @var array $middlewareGroups Route Middleware Group */
    public array $middlewareGroups = [
        'api' => [],
        'web' => [],
    ];
}