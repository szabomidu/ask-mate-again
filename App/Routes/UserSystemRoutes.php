<?php


namespace App\Routes;


use App\Controller\APIControllers\UserSystemControllers\APIRegistrationController;
use App\Controller\PublicControllers\UserSystemControllers\RegistrationController;
use BK_Framework\Router\Router;

class UserSystemRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/register", function () {
			$controller = new RegistrationController("UserSystem");
			$controller->run();
		}, "GET");

		Router::add("/api/register", function () {
			$controller = new APIRegistrationController();
			$controller->run();
		}, "POST");

	}

}
