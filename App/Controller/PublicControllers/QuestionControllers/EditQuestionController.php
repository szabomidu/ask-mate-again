<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;

class EditQuestionController extends BaseController
{
    private int $id;
    /**
     * EditQuestionController constructor.
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
        $this->view("Questions.edit-question", ["questionData"=>$questionData]);
    }
}
