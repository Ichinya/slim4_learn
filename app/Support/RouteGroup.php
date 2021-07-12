<?php

namespace App\Support;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

class RouteGroup
{
    public App $app;
    public string $prefix;
    public string $routes;
    public array $middleware = [];

    public function __construct(&$app)
    {
        $this->app = $app;
    }

    public function prefix(string $prefix): RouteGroup
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function routes($path = ''): RouteGroup
    {
        $this->routes = $path;

        return $this;
    }

    public function middleware(array $middleware): RouteGroup
    {
        $this->middleware = $middleware;

        return $this;
    }

    public function register()
    {
        $group = $this->app->group($this->prefix, function (RouteCollectorProxy $group) {
            Route::setup($group);

            require_once $this->routes;
        });

        array_walk($this->middleware, fn($middleware) => $group->add(new $middleware));

        Route::setup($this->app);
    }
}
