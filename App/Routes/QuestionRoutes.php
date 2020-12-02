<?php


namespace App\Routes;

use App\Controller\PublicControllers\QuestionController;
use App\Controller\APIControllers\QuestionControllers\APIAddQuestionController;
use App\Controller\PublicControllers\QuestionControllers\AddQuestionController;
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
    
  	Router::add("/add-question", function () {
			$controller = new AddQuestionController();
			$controller->run();
		}, "GET");

		Router::add("/api/add-question", function () {
			$controller = new APIAddQuestionController();
			$controller->run();
		}, "POST");

	}
}
