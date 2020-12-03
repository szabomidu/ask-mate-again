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

	public static function deleteByQuestionId(PDO $pdo, int $questionId) : void
	{
		$sql = "DELETE
                FROM answer
                WHERE id_question = :id";
		Queries::execute($pdo, $sql, ["id" => $questionId]);
	}

    public static function deleteById(PDO $pdo, int $answerId) : void
    {
		$sql = "DELETE
                FROM answer
                WHERE id = :id";
		Queries::execute($pdo, $sql, ["id" => $answerId]);
    }

}
