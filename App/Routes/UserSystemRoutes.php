<?php


namespace App\Routes;


use App\Controller\APIControllers\UserSystemControllers\APILoginController;
use App\Controller\APIControllers\UserSystemControllers\APIRegistrationController;
use App\Controller\APIControllers\UserSystemControllers\LogoutController;
use App\Controller\PublicControllers\UserSystemControllers\LoginController;
use App\Controller\PublicControllers\UserSystemControllers\RegistrationController;
use App\Exception\InvalidLoginException;
use App\Exception\InvalidRegistrationException;
use App\Model\User;
use BK_Framework\Exception\NoSessionException;
use BK_Framework\Helper\JSON;
use BK_Framework\Logger\Logger;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Post;

class UserSystemRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/register", function () {
			$controller = new RegistrationController();
			$controller->run();
		}, "GET");

		Router::add("/api/register", function () {
			$userData = Post::requestBody();
			try {
				$user = new User($userData);
				$controller = new APIRegistrationController($user);
				$controller->run();
			} catch (InvalidRegistrationException $exception) {
				echo JSON::encode(["state"=>"taken"]);
				Logger::getInstance()->error($exception->getMessage());
			} catch (NoSessionException $exception) {
				Logger::getInstance()->error($exception->getMessage());
			}

		}, "POST");

        Router::add("/login", function () {
            $controller = new LoginController();
            $controller->run();
        }, "GET");

		Router::add("/api/login", function () {
		    $userData = Post::requestBody();
		    $username = $userData["username"];
		    $password = $userData["password"];
            try {
                $controller = new APILoginController($username, $password);
                $controller->run();
            } catch (InvalidLoginException $exception) {
                echo JSON::encode(["state"=>"invalid"]);
                Logger::getInstance()->error($exception->getMessage());
            }
        }, "POST");

    	Router::add("/logout", function () {
			$controller = new LogoutController();
			$controller->run();
		}, "GET");
	}

}
