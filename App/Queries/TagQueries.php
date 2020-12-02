<?php


namespace App\Queries;


use BK_Framework\Database\QueryTools\Queries;
use PDO;

class TagQueries
{

	public static function getByQuestionId(PDO $pdo, string $questionId) : array
	{
		$sql = "SELECT id, name
				 FROM tag
				 JOIN rel_question_tag rqt ON tag.id = rqt.id_tag
				 WHERE rqt.id_question = :questionId";
		return Queries::queryAll($pdo, $sql, ["questionId" => $questionId]);
	}

}
