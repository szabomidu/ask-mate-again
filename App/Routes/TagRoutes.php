<?php


namespace App\Routes;


use App\Controller\APIControllers\TagControllers\APIAddExistingTagController;
use App\Controller\APIControllers\TagControllers\APIAddNewTagController;
use App\Controller\PublicControllers\AllTagsController;
use App\Controller\PublicControllers\TagControllers\AddTagController;
use BK_Framework\Router\Router;

class TagRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/add-tag/([0-9]*)", function () {
            $controller = new AddTagController();
            $controller->run();
        }, "GET");

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
