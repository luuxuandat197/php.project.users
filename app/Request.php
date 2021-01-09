<?php

class Request
{

    public function getPath()
    {
        $path = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

        if ($path == '/') {
            $path = [
                'controller' => 'HomeController',
                'action' => 'index',
            ];

        } else {
            $path = [
                'controller' => ucfirst($path[0]) . 'Controller',
                'action' => isset($path[1]) ? $path[1] : 'index',
            ];
        }
        return $path;
    }

    public function method(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return strtolower($_SERVER['REQUEST_METHOD']) === 'get';
    }

    public function isPost()
    {
        return strtolower($_SERVER['REQUEST_METHOD']) === 'post';
    }

    public function dataRequest()
    {
        $forms = [];

        foreach ($_REQUEST as $name => $value) {
            $forms[$name] = $value;
        }

        return $forms;
    }
}
