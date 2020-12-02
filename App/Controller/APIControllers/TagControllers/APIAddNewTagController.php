<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;
use BK_Framework\SuperGlobal\Post;

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
		$pdo = Connection::getConnection(self::$dbConfig);
		$name = Post::requestBody()["name"];
		$tagId = TagQueries::add($pdo, $name);
		TagQueries::addTagToQuestion($pdo, $this->questionId, $tagId);
        echo JSON::encode(["id"=>$this->questionId]);

    }
}
