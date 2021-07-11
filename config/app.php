<?php
return [
    'name' => env('APP_NAME', 'Slim4PHP'),
    'providers' => [
        /* App Service Providers... */
        \App\Providers\EnvironmentVariablesServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class
    ],
];