<?php


namespace App\Controller\PublicControllers\AnswerControllers;


use App\Controller\BaseController;

class AddAnswerController extends BaseController
{

	private int $questionId;

	/**
	 * AddAnswerController constructor.
	 * @param int $questionId
	 */
	public function __construct(int $questionId)
	{
		parent::__construct();
		$this->questionId = $questionId;
	}

	public function run()
    {
        $this->view("Answers.add-answer", ["questionId"=>$this->questionId]);
    }
}
