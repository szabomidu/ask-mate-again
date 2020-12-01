<?php


namespace App\Controller\UserSystemControllers;


use App\Controller\BaseController;

class RegistrationController extends BaseController
{

    public function run()
    {
		$this->view("register");
	}
}
