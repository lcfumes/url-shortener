<?php

namespace app\Provider\Service;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Provider\Controller;
// use app\Controllers\IndexController;
// use app\Controllers\ClientsController;

class ControllerProviders implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        // $app['provider.controller.home'] = $app->share(function () {
        //     return new IndexController();
        // });

        // $app['provider.controller.clients'] = $app->share(function () {
        //     return new ClientsController();
        // });
    }

    public function boot(Container $app) {}
}