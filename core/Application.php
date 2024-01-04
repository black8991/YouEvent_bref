<?php

namespace app\core;
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

}