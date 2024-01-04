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

    public function post($path, $callback)
    {
        //block of code here
        $this->routes['post'][$path] = $callback;
    }
    public function resolve()
    {
        
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback) {
            if (is_string($callback)) {
                return $this->renderView($callback);
            }
        
            if (is_array($callback)) {
                $controller = new $callback[0]();
                $method = $callback[1];

                $id = $this->extractIdFromPath($path);
                return call_user_func([$controller, $method]);

            }
        
            return call_user_func($callback);
        }
        
        // Handle the case when the route is not found
        return $this->renderView(404);
    }

    public function extractIdFromPath($path)
    {
        $id = explode('/',$path);
        return isset($id[2]) ? $id[2] : null;
    }

    public function renderView($view, $variables = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent =  $this->renderOnlyView($view, $variables);
        return str_replace("{{content}}", $viewContent, $layoutContent);
    }

    public function renderViewAuth($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent =  $this->renderOnlyViewAuth($view);
        return str_replace("{{content}}", $viewContent, $layoutContent);
    }

    protected function renderOnlyViewAuth($view)
    {

        ob_start();
        require_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $variables = [])
    {
        extract($variables);

        ob_start();
        require_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }


    protected function layoutContent()
    {
        ob_start();
        require_once Application::$ROOT_DIR."/views/layout/main.php";
        return ob_get_clean();
    }

}