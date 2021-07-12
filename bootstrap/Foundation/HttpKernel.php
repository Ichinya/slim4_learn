<?php

namespace Boot\Foundation;

class HttpKernel extends Kernel
{

    /** @var array $middleware Global Middleware */
    public array $middleware = [];

    /** @var array $middlewareGroups Route Middleware Group */
    public array $middlewareGroups = [
        'api' => [],
        'web' => [],
    ];

    public array $bootstrap = [
        Bootstrappers\LoadEnvironmentVariables::class,
        Bootstrappers\LoadDebuggingPage::class,
        Bootstrappers\LoadHttpMiddleware::class,
        Bootstrappers\LoadServiceProviders::class
    ];

}