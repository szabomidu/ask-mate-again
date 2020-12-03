<?php


namespace App\Controller\APIControllers\AnswerControllers;


use App\Controller\BaseController;
use BK_Framework\Logger\Logger;

class APIDeleteAnswerController extends BaseController
{

	private int $answerId;

	/**
	 * APIDeleteAnswerController constructor.
	 * @param int $answerId
	 */
	public function __construct(int $answerId)
	{
		parent::__construct();
		$this->answerId = $answerId;
	}

	public function run()
    {
        Logger::getInstance()->debug("Got answer id: " . $this->answerId);
    }
}
