<?php


namespace App\Routes;

use App\Controller\PublicControllers\QuestionController;
use BK_Framework\Router\Router;

class QuestionRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/question", function () {
            $id = $_GET["id"];
            $controller = new QuestionController($id);
            $controller->run();
        }, "GET");
    }
}