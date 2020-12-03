<?php


namespace App\Routes;

use App\Controller\APIControllers\QuestionControllers\APIEditQuestionController;
use App\Controller\PublicControllers\QuestionControllers\AllQuestionsController;
use App\Controller\PublicControllers\QuestionControllers\DeleteQuestionController;
use App\Controller\PublicControllers\QuestionControllers\QuestionController;
use App\Controller\APIControllers\QuestionControllers\APIAddQuestionController;
use App\Controller\PublicControllers\QuestionControllers\AddQuestionController;
use App\Controller\PublicControllers\QuestionControllers\EditQuestionController;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Get;
use BK_Framework\SuperGlobal\Post;

class QuestionRoutes implements RouteInitializer
{
    function init(): void
    {

		Router::add("/all", function () {
			$controller = new AllQuestionsController();
			$controller->run();
		}, "GET");

        Router::add("/question", function () {
            $id = Get::get("id");
            $controller = new QuestionController($id);
            $controller->run();
        }, "GET");

        Router::add("/add-question", function () {
            $controller = new AddQuestionController();
            $controller->run();
        }, "GET");

        Router::add("/api/add-question", function () {
            $controller = new APIAddQuestionController();
            $controller->run();
        }, "POST");

        Router::add("/edit-question", function () {
            $id = $_GET["id"];
            $controller = new EditQuestionController($id);
            $controller->run();
        }, "GET");

        Router::add("/api/edit-question", function () {
            $questionData = Post::requestBody();
            $title = $questionData["title"];
            $message = $questionData["message"];
            $id = Get::get("id");
            $controller = new APIEditQuestionController($id, $title, $message);
            $controller->run();
        }, "PUT");

        Router::add("/delete-question", function () {
            $id = $_GET["id"];
            $controller = new DeleteQuestionController($id);
            $controller->run();
        }, "GET");
    }
}
