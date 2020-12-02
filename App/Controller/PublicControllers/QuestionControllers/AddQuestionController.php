<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;

class AddQuestionController extends BaseController
{

    public function run()
    {
		$this->view("Questions.add-question");
    }

}
