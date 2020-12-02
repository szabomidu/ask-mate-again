<?php


namespace App\Routes;


use App\Controller\APIControllers\TagControllers\RemoveTagController;
use App\Controller\PublicControllers\TagControllers\AddTagController;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Post;

class TagRoutes implements RouteInitializer
{

    function init(): void
    {
        Router::add("/addtag", function () {
            $controller = new AddTagController();
            $controller->run();
        }, "GET");

        Router::add("/api/delete-tag", function () {
            $tagId = Post::requestBody()["tagId"];
            $questionId = Post::requestBody()["questionId"];
            $controller = new RemoveTagController($tagId, $questionId);
            $controller->run();
        }, "DELETE");
    }
}