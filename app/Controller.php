<?php

class Controller
{
    protected $layout = 'app';
    public function view(string $view, $params = [])
    {
        $content = $this->getContent($view, $params);
        $layout = $this->getLayout();
        return str_replace('yield(content)', $content, $layout);
    }

    public function getLayout()
    {
        ob_start();
        include_once __LAYOUT__ . $this->layout . '.php';
        return ob_get_clean();
    }

    public function getContent($view, $params = [])
    {
        foreach ($params as $key => $value){
            $this->{$key} = $value;
        }
        ob_start();
        include_once __VIEW__ . $view . '.php';
        return ob_get_clean();
    }
}
