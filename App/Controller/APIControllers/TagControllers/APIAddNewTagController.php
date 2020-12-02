<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;

class APIAddNewTagController extends BaseController
{

	private string $questionId;

	/**
	 * APIAddNewTagController constructor.
	 * @param string $questionId
	 */
    public function __construct(string $questionId)
    {
		parent::__construct();
		$this->questionId = $questionId;
	}

	public function run()
	{
		echo "New tag has been added to question $this->questionId";
	}
}
