<?php


namespace App\Controller\PublicControllers\AnswerControllers;


use App\Controller\BaseController;
use App\Queries\AnswerQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Database\QueryTools\Queries;

class EditAnswerController extends BaseController
{

    private int $answerId;
    private int $questionId;

    /**
     * EditAnswerController constructor.
     * @param int $questionId
     * @param int $answerId
     */
    public function __construct(int $questionId, int $answerId)
    {
        parent::__construct();
        $this->answerId = $answerId;
        $this->questionId = $questionId;
    }


    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        $answerData = AnswerQueries::getAnswerDataById($pdo, $this->answerId);
        $this->view("Answers.edit-answer", ["answerData"=>$answerData, "questionId"=>$this->questionId]);

    }
}
