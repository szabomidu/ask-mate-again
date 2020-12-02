<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;

class AddQuestionController extends BaseController
{

    public function run()
    {
    	session_start();
		$this->view("Questions.add-question");
    }

}
