<?php


namespace App\Routes;


use App\Controller\APIControllers\TagControllers\RemoveTagController;
use App\Controller\APIControllers\TagControllers\APIAddExistingTagController;
use App\Controller\APIControllers\TagControllers\APIAddNewTagController;
use App\Controller\PublicControllers\TagControllers\AllTagsController;
use App\Controller\PublicControllers\TagControllers\AddTagController;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Post;

class TagRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/add-tag/([0-9]*)", function ($questionId) {
            $controller = new AddTagController($questionId);
            $controller->run();
        }, "GET");

        Router::add("/api/delete-tag", function () {
            $tagId = Post::requestBody()["tagId"];
            $questionId = Post::requestBody()["questionId"];
            $controller = new RemoveTagController($tagId, $questionId);
            $controller->run();
        }, "DELETE");

		Router::add("/api/add-tag/([0-9]*)", function ($questionId) {
			$controller = new APIAddNewTagController($questionId);
			$controller->run();
		}, "POST");

		Router::add("/api/add-tag/([0-9]*)/([0-9]*)", function ($questionId, $tagId) {
			$controller = new APIAddExistingTagController($questionId, $tagId);
			$controller->run();
		}, "POST");

		Router::add("/all-tags", function () {
			$controller = new AllTagsController();
			$controller->run();
		}, "GET");

    }
}
