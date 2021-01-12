<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;

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
		TagQueries::addTagToQuestion($pdo, $this->questionId, $this->tagId);
		echo JSON::encode(["id"=>$this->questionId]);
	}
}
