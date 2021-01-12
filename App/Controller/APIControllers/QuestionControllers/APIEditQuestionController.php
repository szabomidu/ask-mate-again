<?php


namespace App\Controller\APIControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;

class APIEditQuestionController extends BaseController
{

    private int $id;
    private string $title;
    private string $message;

    /**
     * APIEditQuestionController constructor.
     * @param int $id
     * @param string $title
     * @param string $message
     */
    public function __construct(int $id, string $title, string $message)
    {
        $this->id = $id;
        $this->message = $message;
        $this->title = $title;
        parent::__construct();
    }

    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        QuestionQueries::updateQuestion($pdo, $this->id, $this->title, $this->message);
        echo JSON::encode(["state"=>"success", "id" => $this->id]);
    }
}
