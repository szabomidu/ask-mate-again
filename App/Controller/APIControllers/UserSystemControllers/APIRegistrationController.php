<?php


namespace App\Controller\APIControllers\UserSystemControllers;


use App\Controller\BaseController;
use App\Exception\InvalidRegistrationException;
use App\Model\User;
use App\Queries\UserQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Exception\NoSessionException;
use BK_Framework\Helper\JSON;
use BK_Framework\SuperGlobal\Session;

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
	 * @throws NoSessionException
	 */
	public function run()
	{
		$pdo = Connection::getConnection(self::$dbConfig);
		if (UserQueries::checkIfUsernameExists($pdo, self::$user)) {
			throw new InvalidRegistrationException("Username is already taken");
		}
		$userId = UserQueries::registerNewUser($pdo, self::$user);
		Session::login($userId);
		Session::set('userName', self::$user->getUsername());
		echo JSON::encode(["state"=>"success"]);
	}
}
