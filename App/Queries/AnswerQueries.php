<?php


namespace App\Queries;


use App\Model\Answer;
use BK_Framework\Database\QueryTools\Queries;
use PDO;

class AnswerQueries
{

	public static function add(PDO $pdo, Answer $answer) : void
	{
		$sql = "INSERT INTO answer
				(id_question, id_registered_user, message, vote_number)
				VALUES (:questionId, :userId, :message, 0)";
		Queries::execute($pdo, $sql, ["questionId"=>$answer->getQuestionId(),
									"userId"=>$answer->getUserId(),
									"message"=>$answer->getMessage()]);

	}

}
