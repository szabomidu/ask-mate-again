<?php

use App\Routes\RouteManager;
use BK_Framework\Router\Router;
use BK_Framework\SuperGlobal\Server;

require_once("vendor/autoload.php");

session_start();
RouteManager::init();
$path = Server::getPath();
$method = Server::getMethod();
Router::execute($path, $method);
