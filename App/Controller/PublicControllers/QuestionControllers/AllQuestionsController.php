<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;

class AllQuestionsController extends BaseController
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
        $this->view("Questions.all-questions", ["questions"=>$questions]);
    }
}
