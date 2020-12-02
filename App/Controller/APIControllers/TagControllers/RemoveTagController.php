<?php


namespace App\Controller\APIControllers\TagControllers;


use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;

class RemoveTagController extends BaseController
{

    private int $tagId;
    private int $questionId;

    /**
     * EditQuestionController constructor.
     * @param int $tagId
     * @param int $questionId
     */

    public function __construct(int $tagId, int $questionId)
    {
        $this->tagId = $tagId;
        $this->questionId = $questionId;
        parent::__construct();
    }

    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        TagQueries::removeTagFromQuestion($pdo, $this->tagId, $this->questionId);
        echo JSON::encode(["questionId" => $this->questionId, "tagId" => $this->tagId]);
    }
}