<?php


namespace App\Routes;


use App\Controller\UserSystemControllers\RegistrationController;
use BK_Framework\Router\Router;

class UserSystemRoutes implements RouteInitializer
{

	function init(): void
	{
		Router::add("/register", function () {
			$controller = new RegistrationController("UserSystem");
			$controller->run();
		}, "GET");
	}

}
