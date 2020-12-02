<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;

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
		$pdo = Connection::getConnection(self::$dbConfig);
		TagQueries::addExistingTagToQuestion($pdo, $this->questionId, $this->tagId);
		echo "Existing tag has been added to question $this->questionId with id $this->tagId";
	}
}
