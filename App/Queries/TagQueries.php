<?php


namespace App\Queries;


use BK_Framework\Database\QueryTools\Queries;
use PDO;

class TagQueries
{

	public static function getAllTags(PDO $pdo): array
	{
		$sql = "SELECT id, name
              FROM ask_mate_again.tag";
		return Queries::queryAll($pdo, $sql);
	}

	public static function getAllAvailableTagsForQuestion(PDO $pdo, int $questionId) : array
	{
		$sql = "SELECT id, name
				FROM ask_mate_again.tag
                WHERE id NOT IN
				(SELECT id
				FROM ask_mate_again.tag
				JOIN rel_question_tag rqt on tag.id = rqt.id_tag
				WHERE rqt.id_question = :questionId
				GROUP BY id)";

		return Queries::queryAll($pdo, $sql, ["questionId"=>$questionId]);
	}

	public static function add(PDO $pdo, string $name): string
	{
		$sql = "INSERT INTO tag (name)
				VALUES (:name)";
		return Queries::executeAndReturnWithId($pdo, $sql, ["name" => $name]);
	}

	public static function getAllTagsWithCounter(PDO $pdo): array
	{
		$sql = "SELECT name, count(name) as 'tag_number'
                FROM ask_mate_again.tag
                JOIN rel_question_tag rqt on tag.id = rqt.id_tag
                GROUP BY name";
		return Queries::queryAll($pdo, $sql);
	}

	public static function getByQuestionId(PDO $pdo, string $questionId): array
	{
		$sql = "SELECT id, name
				 FROM tag
				 JOIN rel_question_tag rqt ON tag.id = rqt.id_tag
				 WHERE rqt.id_question = :questionId";
		return Queries::queryAll($pdo, $sql, ["questionId" => $questionId]);
	}

	public static function addTagToQuestion(PDO $pdo, string $questionId, string $tagId): void
	{
		$sql = "INSERT INTO rel_question_tag (id_question, id_tag)
				VALUES (:questionId, :tagId)";
		Queries::execute($pdo, $sql, ["questionId" => $questionId, "tagId" => $tagId]);
	}

	public static function removeTagFromQuestion(PDO $pdo, int $tagId, int $questionId)
	{
		$sql = "DELETE
                FROM rel_question_tag
                WHERE id_question = :questionId AND id_tag = :tagId";
		Queries::execute($pdo, $sql, ["questionId" => $questionId, "tagId" => $tagId]);
	}

	public static function deleteByQuestionId(PDO $pdo, int $id)
	{
		$sql = "DELETE
                FROM rel_question_tag
                WHERE id_question = :id";
		Queries::execute($pdo, $sql, ["id" => $id]);
	}

}
