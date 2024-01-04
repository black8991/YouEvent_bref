<?php

namespace app\core;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Router
{
    public Request $request;

    protected array $routes = []; // this is an associative array look down
    //this array will look like this

//    protected array $routes = [
//        'get' => [
//            '/' => $callback,
//            'contact' =>$callback
//        ],
//        'post' =>[
//
//        ]
//    ];
    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path, $callback)
    {
        //block of code here
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if(!$callback){
            return "Page Not Fount";
            //redirect to the 404 page
        }
        if(is_string($callback))
        {
            return $this->renderView($callback);
        }
        //but if it exist we should return that callback function
        //for that we can use the already built in function call user func that takes out callback
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        require_once __DIR__ ."/../views/$view.php";
    }
}