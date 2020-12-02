<?php


namespace App\Controller\PublicControllers;


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
        session_start();
        $pdo = Connection::getConnection(self::$dbConfig);
        $tags = TagQueries::getAllTags($pdo);
        $this->view("all-tags", ["tags"=>$tags]);
    }
}