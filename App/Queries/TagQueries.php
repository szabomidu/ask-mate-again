<?php


namespace App\Queries;


use BK_Framework\Database\QueryTools\Queries;
use PDO;

class TagQueries
{

    public static function getAllTags(PDO $pdo) : array
    {
        $sql = "SELECT name, count(name) as 'tag_number'
                FROM ask_mate_again.tag
                GROUP BY name";
        return Queries::queryAll($pdo, $sql);
    }
}