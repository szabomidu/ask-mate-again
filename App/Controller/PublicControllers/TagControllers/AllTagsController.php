<?php


namespace App\Controller\PublicControllers\TagControllers;


use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;

class AllTagsController extends BaseController
{

    /**
     * AllTagsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
        $tags = TagQueries::getAllTagsWithCounter($pdo);
        $this->view("Tags.all-tags", ["tags"=>$tags]);
    }
}
