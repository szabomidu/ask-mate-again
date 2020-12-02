<?php


namespace App\Controller\APIControllers\UserSystemControllers;


use App\Controller\BaseController;
use BK_Framework\SuperGlobal\Server;
use BK_Framework\SuperGlobal\Session;

class LogoutController extends BaseController
{

	public function run()
	{
		session_start();
		Session::logout();
		Server::redirect("/");
	}

}
