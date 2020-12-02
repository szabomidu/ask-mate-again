<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;
use BK_Framework\SuperGlobal\Server;
use BK_Framework\SuperGlobal\Session;

class AddQuestionController extends BaseController
{

    public function run()
    {
    	if (!Session::isLoggedIn()) Server::redirect("/");
		$this->view("Questions.add-question");
    }

}
