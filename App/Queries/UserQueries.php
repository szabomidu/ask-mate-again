<?php


namespace App\Queries;


use BK_Framework\Database\QueryTools\Queries;
use PDO;

class UserQueries
{

	public static function checkIfUsernameExists(PDO $pdo, object $user) : bool
	{
		$sql = "SELECT EXISTS
					(SELECT *
					FROM registered_user
					WHERE email = :email)
    			AS 'exists'";
		return Queries::queryOne($pdo, $sql, ["email"=>$user->getUsername()])->get("exists");
	}

}
