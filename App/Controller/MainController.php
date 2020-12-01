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
		$questions = Queries::queryAll($pdo, $sql);
		$this->view("main", ["questions"=>$questions]);
	}
}
