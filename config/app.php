<?php
return [
    'name' => env('APP_NAME', 'Slim4PHP'),
    'providers' => [
        /* App Service Providers... */
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
    ],
];