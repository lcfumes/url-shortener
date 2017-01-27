<?php

namespace app;

use Silex;
use app\ControllerProvider\Provider;
use Symfony\Component\Yaml\Parser;
use Silex\Application as SilexApplication;

class Application extends SilexApplication
{
    public function __construct()
    {
        parent::__construct();
        $this->registerConfig();
        $this->registerProviders();
        $this->mountControllers();
    }

    public function registerConfig()
    {
        // $yaml = new Parser();
        // $config = $yaml->parse(file_get_contents(__DIR__.'/../config/config.yml'));
        // $this['config'] = $config;
    }

    public function registerProviders()
    {
        $this->register(new \app\Provider\Service\ControllerProviders());
    }

    private function mountControllers()
    {
        $this->get('/', function() {
            return $this->json([
                'name' => 'Luiz Fumes',
                'email' => 'lcfumes@gmail.com'
            ]);
        });
    }
}