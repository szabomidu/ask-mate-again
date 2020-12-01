<?php


namespace App\Routes;


class RouteManager
{

	private static array $routes = array();

	public static function init()
	{
		self::$routes = array(new MainRoutes(),
							new UserSystemRoutes());
		foreach (self::$routes as $route) $route->init();
	}

}
