<?php


namespace App\Routes;


class RouteManager
{

	private static array $routes = array();

	public static function init()
	{
		array_push(self::$routes, new MainRoutes());
		foreach (self::$routes as $route) $route->init();
	}

}
