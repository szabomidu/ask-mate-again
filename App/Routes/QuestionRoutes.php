<?php


namespace App\Routes;


use App\Controller\PublicControllers\QuestionControllers\AddQuestionController;
use App\Controller\PublicControllers\UserSystemControllers\RegistrationController;
use BK_Framework\Router\Router;

class QuestionRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/add-question", function () {
			$controller = new AddQuestionController("Questions");
			$controller->run();
		}, "GET");
	}

}
