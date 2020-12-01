<?php


namespace App\Routes;


use App\Controller\MainController;
use BK_Framework\Router\Router;

class MainRoutes implements RouteInitializer
{

    public function init(): void
    {
		Router::add("/", function () {
			$controller = new MainController();
			$controller->run();
		}, "GET");

    }
}
