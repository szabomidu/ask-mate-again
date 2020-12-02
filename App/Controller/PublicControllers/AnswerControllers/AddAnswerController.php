<?php


namespace App\Controller\PublicControllers\AnswerControllers;


class AddAnswerController extends \App\Controller\BaseController
{

    public function run()
    {
        $this->view("Answers.add-answer");
    }
}
