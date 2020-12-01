<?php


namespace App\Controller\APIControllers\UserSystemControllers;


use App\Controller\BaseController;
use App\Exception\InvalidRegistrationException;
use App\Model\User;
use App\Queries\UserQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;

class APIRegistrationController extends BaseController
{

	private static User $user;

	/**
	 * APIRegistrationController constructor.
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		parent::__construct();
		self::$user = $user;
	}

	/**
	 * @throws InvalidRegistrationException
	 */
	public function run()
	{
		$pdo = Connection::getConnection(self::$dbConfig);
		if (UserQueries::checkIfUsernameExists($pdo, self::$user)) {
			throw new InvalidRegistrationException("Username is already taken");
		}
		echo JSON::encode(["Success"]);
	}
}
