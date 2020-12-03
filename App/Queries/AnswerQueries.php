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

	public static function getAnswerDataById(PDO $pdo, int $id)
    {
	    $sql = "SELECT id, message
	            FROM answer
	            WHERE id = :id";
        return Queries::queryOne($pdo, $sql, ["id" => $id]);
    }

    public static function updateAnswer(PDO $pdo, int $answerId, string $message)
    {
        $sql = "UPDATE answer
                SET message = :message
                WHERE id = :id";
        Queries::execute($pdo, $sql,
                ["message" => $message,
                "id" => $answerId]);
      
    }
  
    public static function deleteById(PDO $pdo, int $answerId) : void
    {
		$sql = "DELETE
                FROM answer
                WHERE id = :id";
		Queries::execute($pdo, $sql, ["id" => $answerId]);
    }

}
