<?php

namespace XdebugDockerDemo\Controller;

use XdebugDockerDemo\Service\ExampleService;

class ExampleController
{

    /**
     * @var ExampleService
     */
    private $exampleService;

    /**
     * UserController constructor.
     *
     * @param ExampleService $exampleService
     */
    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    /**
     *
     */
    public function doSomething()
    {
        phpinfo();
        echo "\n Breakpoint here. \n"; // put a breakpoint here

        echo "\n Should stop before this. \n \n";
    }
}