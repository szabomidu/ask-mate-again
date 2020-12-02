<?php


namespace App\Controller\PublicControllers\AnswerControllers;


use App\Controller\BaseController;

class AddAnswerController extends BaseController
{

    public function run()
    {
    	session_start();
        $this->view("Answers.add-answer");
    }
}
