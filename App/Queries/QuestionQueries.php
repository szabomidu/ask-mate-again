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

    public static function getQuestionDataById(PDO $pdo, int $id)
    {
        $sql = "SELECT id, title, message
                FROM question
                WHERE id = :id";
        return Queries::queryOne($pdo, $sql, ["id"=>$id]);
    }


	public static function add(PDO $pdo, Question $question, string $userId) : void
	{
		$sql = "INSERT INTO question (id_registered_user, title, message, vote_number)
				VALUES (:userId, :title, :message, 0)";

		Queries::execute($pdo, $sql, ["userId"=>$userId,
									"title"=>$question->getTitle(),
									"message"=>$question->getMessage()]);
	}

}
