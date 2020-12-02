<?php


namespace App\Controller\APIControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Model\Question;
use App\Queries\QuestionQueries;
use BK_Framework\SuperGlobal\Post;

class APIAddQuestionController extends BaseController
{

    public function run()
    {
		$title = Post::get("title");
		$message = Post::get("message");
		$question = new Question($title, $message);
		QuestionQueries::add($question);
    }
}
