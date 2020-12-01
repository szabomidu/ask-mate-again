<?php


namespace App\Controller;


use BK_Framework\Database\Connection\Connection;
use BK_Framework\Database\QueryTools\Queries;

class MainController extends BaseController
{

    /**
     * MainController constructor.
     */
    public function __construct()
    {
    	parent::__construct();
    }

	public function run()
	{
		$pdo = Connection::getConnection(self::$dbConfig);
		$sql = "SELECT id, title, message, vote_number
				FROM question
				ORDER BY id DESC
				LIMIT 5";
		$result = Queries::queryAll($pdo, $sql);
		foreach($result as $record) echo $record->get('title');
	}
}
