<?php


namespace App\Controller\PublicControllers;


use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;

class AllQuestionController extends \App\Controller\BaseController
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
        $questions = QuestionQueries::getAllQuestions($pdo);
        $this->view("all", ["questions"=>$questions]);
    }
}
