<?php


namespace App\Queries;


use App\Model\Question;
use BK_Framework\Database\QueryTools\Queries;
use PDO;

class QuestionQueries
{

    public static function getFiveMostRecentQuestions(PDO $pdo): array
    {
        $sql = "SELECT id, title, message, vote_number, submission_time
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
        return Queries::queryOne($pdo, $sql, ["id" => $id]);
    }


    public static function add(PDO $pdo, Question $question, string $userId) : int
    {
        $sql = "INSERT INTO question (id_registered_user, title, message, vote_number)
				VALUES (:userId, :title, :message, 0)";

        return Queries::executeAndReturnWithId($pdo, $sql, ["userId" => $userId,
            "title" => $question->getTitle(),
            "message" => $question->getMessage()]);
    }

    public static function getAllQuestions(PDO $pdo): array
    {
        $sql = "SELECT id, title, message, vote_number, submission_time
				FROM question
				ORDER BY id DESC";
        return Queries::queryAll($pdo, $sql);
    }

    public static function getAnswersToQuestionById(PDO $pdo, int $id)
    {
        $sql = "SELECT id,
                    message,
                    submission_time,
                    vote_number
                FROM answer
                WHERE id_question = :id";
        return Queries::queryAll($pdo, $sql, ["id" => $id]);
    }

    public static function updateQuestion(PDO $pdo, int $id, string $title, string $message)
    {
        $sql = "UPDATE question
                SET title = :title,
                    message = :message
                WHERE id = :id";
        Queries::execute($pdo, $sql,
                                    ["title" => $title,
                                    "message" => $message,
                                    "id" => $id]);
    }

    public static function deleteQuestion($pdo, int $id)
    {
        $sql = "DELETE
                FROM question
                WHERE id = :id";
        Queries::execute($pdo, $sql, ["id" => $id]);
    }

}
