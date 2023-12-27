<?php

namespace app\core;


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
            echo "Page Not Fount";
            exit;
            //redirect to the 404 page
        }

        //but if it exist we should return that callback function
        //for that we can use the already built in function call user func that takes out callback
        echo call_user_func($callback);

    }
}