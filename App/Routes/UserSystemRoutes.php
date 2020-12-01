<?php


namespace App\Routes;


use App\Controller\APIControllers\UserSystemControllers\APIRegistrationController;
use App\Controller\PublicControllers\UserSystemControllers\RegistrationController;
use App\Exception\InvalidRegistrationException;
use App\Model\User;
use BK_Framework\Helper\JSON;
use BK_Framework\Logger\Logger;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Post;

class UserSystemRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/register", function () {
			$controller = new RegistrationController("UserSystem");
			$controller->run();
		}, "GET");

		Router::add("/api/register", function () {
			$userData = Post::requestBody();
			try {
				$user = new User($userData);
				$controller = new APIRegistrationController($user);
				$controller->run();
			} catch (InvalidRegistrationException $exception) {
				echo JSON::encode([$exception->getMessage()]);
				Logger::getInstance()->error($exception->getMessage());
			}

		}, "POST");

	}

}
