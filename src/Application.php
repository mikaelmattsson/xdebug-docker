<?php

namespace XdebugDockerDemo;

use XdebugDockerDemo\Controller\ExampleController;
use XdebugDockerDemo\Service\ExampleService;

class Application
{

    public function run()
    {
        $service = new ExampleService();

        $controller = new ExampleController($service);

        $controller->doSomething();
    }
}