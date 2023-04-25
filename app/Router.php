<?php

class Router {

    private array $acceptedRoutes = [
        'index',
        'reloadcomponent',
        'addcard',
        'removecard',
        'calculate'
    ];
    private string $defaultRoute = 'index';
    private App $app;

    function __construct() {
        $this->app = new App;
    }

    public function start() {

        $action = $this->defaultRoute;

        if (isset($_GET['action'])) {
            if (in_array($_GET['action'], $this->acceptedRoutes)) {
                $action = $_GET['action'];
            }
        }

        switch ($action) {
            case 'index':
                $this->app->index();
                break;
            case 'addcard':
                $this->app->addCard();
                break;
            case 'removecard':
                $this->app->removeCard();
                break;
            default:
                $this->app->index();
        }

    }

}