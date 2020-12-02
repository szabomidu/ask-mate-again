<?php


namespace App\Controller\PublicControllers\QuestionControllers;


use App\Controller\BaseController;
use App\Queries\QuestionQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\SuperGlobal\Server;

class DeleteQuestionController extends BaseController
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
        QuestionQueries::deleteQuestion($pdo, $this->id);
        Server::redirect("/all");
    }
}
