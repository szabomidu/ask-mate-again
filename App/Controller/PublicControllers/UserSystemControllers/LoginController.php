<?php


namespace App\Controller\PublicControllers\UserSystemControllers;


use App\Controller\BaseController;

class LoginController extends BaseController
{

    public function run()
    {
        $this->view("UserSystem.login");
    }
}
