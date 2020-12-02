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
  
	public static function getByQuestionId(PDO $pdo, string $questionId) : array
	{
		$sql = "SELECT id, name
				 FROM tag
				 JOIN rel_question_tag rqt ON tag.id = rqt.id_tag
				 WHERE rqt.id_question = :questionId";
		return Queries::queryAll($pdo, $sql, ["questionId" => $questionId]);
	}

	public static function removeTagFromQuestion(PDO $pdo, int $tagId, int $questionId)
    {
        $sql = "DELETE
                FROM rel_question_tag
                WHERE id_question = :questionId AND id_tag = :tagId";
        Queries::execute($pdo, $sql, ["questionId" => $questionId, "tagId" => $tagId]);
    }

}
