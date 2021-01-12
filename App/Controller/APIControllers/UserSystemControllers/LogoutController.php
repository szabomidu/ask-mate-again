<?php


namespace App\Controller\APIControllers\UserSystemControllers;


use App\Controller\BaseController;
use BK_Framework\SuperGlobal\Server;
use BK_Framework\SuperGlobal\Session;

class LogoutController extends BaseController
{

	public function run()
	{
		Session::logout();
		Server::redirect("/");
	}

}
