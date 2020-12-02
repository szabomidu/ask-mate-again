<?php


namespace App\Routes;


use App\Controller\PublicControllers\AllTagsController;
use App\Controller\PublicControllers\TagControllers\AddTagController;
use BK_Framework\Router\Router;

class TagRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/add-tag", function () {
            $controller = new AddTagController();
            $controller->run();
        }, "GET");

		Router::add("/all-tags", function () {
			$controller = new AllTagsController();
			$controller->run();
		}, "GET");

    }
}
