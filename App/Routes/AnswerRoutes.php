<?php


namespace App\Routes;


use App\Controller\APIControllers\AnswerControllers\APIAddAnswerController;
use App\Controller\APIControllers\AnswerControllers\APIEditAnswerController;
use App\Controller\APIControllers\QuestionControllers\APIEditQuestionController;
use App\Controller\PublicControllers\AnswerControllers\AddAnswerController;
use App\Controller\PublicControllers\AnswerControllers\EditAnswerController;
use App\Controller\PublicControllers\QuestionControllers\QuestionController;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Get;
use BK_Framework\SuperGlobal\Post;

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

		Router::add("/edit-answer", function () {
		    $questionId = $_GET["questionId"];
		    $answerId = Get::get("id");
		    $controller = new EditAnswerController($questionId, $answerId);
		    $controller->run();
        }, "GET");

		Router::add("/api/edit-answer", function () {
            $answerData = Post::requestBody();
            $message = $answerData["message"];
            $questionId = $answerData["questionId"];
			$id = Get::get("id");
            $controller = new APIEditAnswerController($id, $message, $questionId);
            $controller->run();
        }, "PUT");
	}
}
