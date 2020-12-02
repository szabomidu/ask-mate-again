<?php


namespace App\Routes;


use App\Controller\PublicControllers\TagControllers\AddTagController;
use BK_Framework\Router\Router;

class TagRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/addtag", function () {
            $controller = new AddTagController();
            $controller->run();
        }, "GET");
    }
}