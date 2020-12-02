<?php


namespace App\Controller\PublicControllers\TagControllers;



use App\Controller\BaseController;
use App\Queries\TagQueries;
use BK_Framework\Database\Connection\Connection;

class AddTagController extends BaseController
{

    public function run()
    {
        session_start();
        $pdo = Connection::getConnection(self::$dbConfig);
        $tags = TagQueries::getAllTags($pdo);
        $this->view("Tags.add-tag", ["tags"=>$tags]);
    }
}

