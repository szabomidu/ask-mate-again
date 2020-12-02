<?php


namespace App\Queries;


use App\Model\User;
use BK_Framework\Database\QueryTools\Queries;
use PDO;
use function Symfony\Component\String\s;

class UserQueries
{

	public static function checkIfUsernameExists(PDO $pdo, User $user): bool
	{
		$sql = "SELECT EXISTS
					(SELECT *
					FROM registered_user
					WHERE email = :email)
    			AS 'exists'";
		return Queries::queryOne($pdo, $sql, ["email" => $user->getUsername()])->get("exists");
	}

	public static function registerNewUser(PDO $pdo, User $user): int
	{
		$sql = "INSERT INTO registered_user
				(email, password_hash)
				VALUES (:email, :password)";
		$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
		return Queries::executeAndReturnWithId($pdo, $sql, ["email" => $user->getUsername(),
			"password" => $hashedPassword]);
	}

	public static function checkIfUsernameValid(PDO $pdo, string $username, $password): bool
	{
		$sql = "SELECT password_hash
				FROM registered_user
				WHERE email = :email";
		$result = Queries::queryOne($pdo, $sql, ["email" => $username]);

		if ($result === null) return false;
		else {
			$storedHash = ($result->get("password_hash"));
			return password_verify($password, $storedHash);
		}
	}

	public static function getUserIdByUsername(PDO $pdo, string $username)
	{
		$sql = "SELECT id
                FROM registered_user
                WHERE email = :username";
		return Queries::queryOne($pdo, $sql, ["username" => $username])->get("id");
	}

}
