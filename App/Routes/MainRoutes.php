<?php


namespace App\Routes;


use App\Controller\PublicControllers\AllQuestionController;
use App\Controller\PublicControllers\AllTagsController;
use App\Controller\PublicControllers\MainController;
use BK_Framework\Router\Router;

class MainRoutes implements RouteInitializer
{

    public function init(): void
    {
		Router::add("/", function () {
			$controller = new MainController();
			$controller->run();
		}, "GET");

        Router::add("/all", function () {
            $controller = new AllQuestionController();
            $controller->run();
        }, "GET");

        Router::add("/all-tags", function () {
            $controller = new AllTagsController();
            $controller->run();
        }, "GET");
    }
}
