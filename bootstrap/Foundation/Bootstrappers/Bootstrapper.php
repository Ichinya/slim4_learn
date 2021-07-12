<?php


namespace Boot\Foundation\Bootstrappers;


use Slim\App;

class Bootstrapper
{
    public App $app;

    final public function __construct(App &$app)
    {
        $this->app = $app;
    }

    public static function setup(App &$app, array $loaders)
    {
        $loaders = array_map(fn($loader) => new $loader($app), $loaders);

        array_walk($loaders, fn(Bootstrapper $loader) => $loader->beforeBoot());
        array_walk($loaders, fn(Bootstrapper $loader) => $loader->boot());
        array_walk($loaders, fn(Bootstrapper $loader) => $loader->afterBoot());
    }

    public function beforeBoot()
    {
    }

    public function boot()
    {
    }

    public function afterBoot()
    {
    }


}