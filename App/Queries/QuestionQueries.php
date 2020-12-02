<?php


namespace App\Queries;


use App\Model\Question;
use BK_Framework\Database\QueryTools\Queries;
use PDO;

class QuestionQueries
{

	public static function getFiveMostRecentQuestions(PDO $pdo) : array
	{
		$sql = "SELECT id, title, message, vote_number
				FROM question
				ORDER BY id DESC
				LIMIT 5";
		return Queries::queryAll($pdo, $sql);
	}

	public static function add(Question $question)
	{

	}

}
