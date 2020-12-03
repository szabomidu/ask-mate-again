<?php


namespace App\Controller\APIControllers\UserSystemControllers;


use App\Controller\BaseController;
use App\Exception\InvalidLoginException;
use App\Queries\UserQueries;
use BK_Framework\Database\Connection\Connection;
use BK_Framework\Helper\JSON;
use BK_Framework\SuperGlobal\Session;

class APILoginController extends BaseController {

    private static string $username;
    private static string $password;

    /**
     * APILoginController constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct();
        self::$username = $username;
        self::$password = $password;
    }


    public function run()
    {
        $pdo = Connection::getConnection(self::$dbConfig);
            if (UserQueries::checkIfUsernameValid($pdo, self::$username, self::$password)) {
                $userId = UserQueries::getUserIdByUsername($pdo, self::$username);
                Session::login($userId);
                Session::set('userName', self::$username);
                echo JSON::encode(["state" => "success"]);
            } else {
                throw new InvalidLoginException("Username is invalid");
            }
    }
}
