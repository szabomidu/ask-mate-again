<?php


namespace App\Queries;


use App\Model\User;
use BK_Framework\Database\QueryTools\Queries;
use PDO;
use function Symfony\Component\String\s;

class UserQueries
{

	public static function checkIfUsernameExists(PDO $pdo, User $user) : bool
	{
		$sql = "SELECT EXISTS
					(SELECT *
					FROM registered_user
					WHERE email = :email)
    			AS 'exists'";
		return Queries::queryOne($pdo, $sql, ["email"=>$user->getUsername()])->get("exists");
	}

	public static function registerNewUser(PDO $pdo, User $user) : int
	{
		$sql = "INSERT INTO registered_user
				(email, password_hash)
				VALUES (:email, :password)";
		$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
		return Queries::executeAndReturnWithId($pdo, $sql, ["email"=>$user->getUsername(),
															"password"=>$hashedPassword]);
	}

    public static function checkIfUsernameValid(PDO $pdo, string $username, $password) : bool
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT EXISTS 
                    (SELECT email 
                    FROM registered_user)
                    WHERE email = :email, password_hash = :hashedPassword)
                    AS 'valid'";
        return Queries::queryOne($pdo, $sql, ["email"=>$username, "password_hashed"=>$hashedPassword])->get("valid");
    }

    public static function getUserIdByUsername(PDO $pdo, string $username)
    {
        $sql = "SELECT id
                FROM registered_user
                WHERE email = :username";
        return Queries::queryOne($pdo, $sql, ["email"=>$username])->get("id");
    }

}
