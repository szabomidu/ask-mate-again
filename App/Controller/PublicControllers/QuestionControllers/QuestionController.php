<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;

class QuestionController extends BaseController
{
    private int $id;

    /**
     * MainController constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
        parent::__construct();
    }

    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        $questionData = QuestionQueries::getQuestionDataById($pdo, $this->id);
        $answers = QuestionQueries::getAnswersToQuestionById($pdo, $this->id);
        $tags = TagQueries::getByQuestionId($pdo, $this->id);
        $this->view("Questions.questionpage", ["questionData"=>$questionData, "tags"=>$tags, "answers"=>$answers]);
    }
}
