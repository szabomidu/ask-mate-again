<?php


namespace App\Controller\APIControllers\AnswerControllers;


use App\Controller\BaseController;
use App\Model\Answer;
use App\Queries\AnswerQueries;
use BK_Framework\SuperGlobal\Post;
use BK_Framework\SuperGlobal\Server;
use BK_Framework\SuperGlobal\Session;

class APIAddAnswerController extends BaseController
{

	private int $questionId;

	/**
	 * APIAddAnswerController constructor.
	 * @param int $questionId
	 */
	public function __construct(int $questionId)
	{
		parent::__construct();
		$this->questionId = $questionId;
	}

	public function run()
    {
		$userId = Session::get("userId");
		$message = Post::get("message");
		$pdo = $this->getConnection();
		$answer = new Answer($this->questionId, $userId, $message);
		AnswerQueries::add($pdo, $answer);
		Server::redirect("/question?id=$this->questionId");
    }
}
