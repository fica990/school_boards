<?php


namespace App\Support;

class Route
{
    private $controller;
    private $action;
    private $params;

    /**
     * Route constructor.
     */
    public function __construct($route)
    {
        $routeData = explode('@', $route);
        $this->controller = $routeData[0];
        $this->action = $routeData[1];
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function call()
    {
        $namespace = 'App\\Controllers\\' . $this->controller;
        $controller = new $namespace();
        $controller->{$this->action}($this->params);
    }


}