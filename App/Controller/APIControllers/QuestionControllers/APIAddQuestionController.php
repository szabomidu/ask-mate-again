<?php


namespace App\Controller\APIControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Model\Question;
use App\Queries\QuestionQueries;
use BK_Framework\SuperGlobal\Post;
use BK_Framework\SuperGlobal\Server;
use BK_Framework\SuperGlobal\Session;

class APIAddQuestionController extends BaseController
{

    public function run()
    {
    	$userId = Session::get("userId");
		$title = Post::get("title");
		$message = Post::get("message");
		$question = new Question($title, $message);
		$pdo = $this->getConnection();
		$questionId = QuestionQueries::add($pdo, $question, $userId);
		Server::redirect("/question?id=$questionId");
    }
}
