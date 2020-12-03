<?php


namespace App\Routes;


use App\Controller\APIControllers\AnswerControllers\APIAddAnswerController;
use App\Controller\APIControllers\AnswerControllers\APIDeleteAnswerController;
use App\Controller\PublicControllers\AnswerControllers\AddAnswerController;
use BK_Framework\Router\Router;

class AnswerRoutes implements RouteInitializer
{

	function init(): void
	{

		Router::add("/add-answer/([0-9]*)", function ($questionId) {
			$controller = new AddAnswerController($questionId);
			$controller->run();
		}, "GET");

		Router::add("/api/add-answer/([0-9]*)", function ($questionId) {
			$controller = new APIAddAnswerController($questionId);
			$controller->run();
		}, "POST");

		Router::add("/api/delete-answer/([0-9]*)", function ($answerId) {
			$controller = new APIDeleteAnswerController($answerId);
			$controller->run();
		}, "DELETE");

	}
}
