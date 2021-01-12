<?php


namespace App\Controller\PublicControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Database\QueryTools\Queries;
use BK_Framework\SuperGlobal\Session;

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
		$questions = QuestionQueries::getFiveMostRecentQuestions($pdo);
		$this->view("main", ["questions"=>$questions]);
	}
}
