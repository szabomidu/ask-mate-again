<?php


namespace App\Controller\PublicControllers\UserSystemControllers;


use App\Controller\BaseController;

class RegistrationController extends BaseController
{

    public function run()
    {
		$this->view("UserSystem.register");
	}
}
