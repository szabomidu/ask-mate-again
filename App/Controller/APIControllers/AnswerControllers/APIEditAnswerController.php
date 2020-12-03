<?php


namespace App\Controller\APIControllers\AnswerControllers;


use App\Controller\BaseController;
use App\Queries\AnswerQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;

class APIEditAnswerController extends BaseController
{
    private int $answerId;
    private string $message;
    private int $questionId;

    /**
     * APIEditAnswerController constructor.
     * @param int $answerId
     * @param string $message
     * @param int $questionId
     */
    public function __construct(int $answerId, string $message, int $questionId)
    {
        parent::__construct();
        $this->answerId = $answerId;
        $this->message = $message;
        $this->questionId = $questionId;
    }


    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        AnswerQueries::updateAnswer($pdo, $this->answerId, $this->message);
        echo JSON::encode(["state"=>"success", "id" => $this->questionId]);
    }
}
