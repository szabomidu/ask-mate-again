<?php


namespace App\Controller\PublicControllers\TagControllers;



use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;

class AddTagController extends BaseController
{

	private int $questionId;

	/**
	 * AddTagController constructor.
	 * @param int $questionId
	 */
	public function __construct(int $questionId)
	{
		parent::__construct();
		$this->questionId = $questionId;
	}

	public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        $tags = TagQueries::getAllAvailableTagsForQuestion($pdo, $this->questionId);
        $this->view("Tags.add-tag", ["tags"=>$tags]);
    }
}

