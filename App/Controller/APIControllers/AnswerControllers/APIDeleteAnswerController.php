<?php


namespace App\Controller\APIControllers\AnswerControllers;


use App\Controller\BaseController;
use App\Queries\AnswerQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;
use BK_Framework\Logger\Logger;
use phpDocumentor\Reflection\Types\Self_;

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
        $pdo = Connection::getConnection(self::$dbConfig);
        AnswerQueries::deleteById($pdo, $this->answerId);
		echo JSON::encode(["answerId" => $this->answerId]);
    }
}
