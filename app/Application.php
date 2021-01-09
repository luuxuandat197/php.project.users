<?php

class Application
{

    public ?Request $resuest;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }

    public function run()
    {
        $path = $this->request->getPath();
        $controller = $path['controller'];
        $action = $path['action'];

        if (class_exists($controller) && method_exists($controller, $action)) {
            require_once __CONTROLLER__ . $controller . '.php';
            $controller = new $controller;
            echo call_user_func([$controller, $path['action']], $this->request);
        } else {
            header('HTTP/1.1 404 Not Found');
            die('404 - The file - ' . $controller . ' - not found');
        }
    }
}
