<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;

class APIAddExistingTagController extends BaseController
{

	private string $questionId;
	private string $tagId;

	/**
	 * APIAddExistingTagController constructor.
	 * @param string $questionId
	 * @param string $tagId
	 */
    public function __construct(string $questionId, string $tagId)
	{
		parent::__construct();
		$this->questionId = $questionId;
		$this->tagId = $tagId;
    }

	public function run()
	{
		echo "Existing tag has been added to question $this->questionId with id $this->tagId";
	}
}
