<?php


namespace App\Routes;


use App\Controller\PublicControllers\UserSystemControllers\RegistrationController;
use BK_Framework\Router\Router;

class QuestionRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/add-question", function () {
			$controller = new RegistrationController("Questions");
			$controller->run();
		}, "GET");
	}

}
