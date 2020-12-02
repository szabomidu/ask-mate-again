<?php


namespace App\Routes;


use App\Controller\PublicControllers\AnswerControllers\AddAnswerController;
use App\Controller\PublicControllers\QuestionControllers\QuestionController;
use BK_Framework\Router\Router;

class AnswerRoutes implements RouteInitializer
{

	function init(): void
	{

		Router::add("/add-answer/([0-9]*)", function ($questionId) {
			$controller = new AddAnswerController($questionId);
			$controller->run();
		}, "GET");

	}
}
