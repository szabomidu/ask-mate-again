<?php


namespace App\Model;


use App\Exception\InvalidRegistrationException;

class User
{

	private string $username;
	private string $password;

	/**
	 * User constructor.
	 * @param array $clientUserData
	 * @throws InvalidRegistrationException
	 */
	public function __construct(array $clientUserData)
	{

		if ($clientUserData["passwordOne"] !== $clientUserData["passwordTwo"]) {
			throw new InvalidRegistrationException("Provided passwords do not match");
		}

		$this->username = $clientUserData["username"];
		$this->password = $clientUserData["passwordOne"];
	}

	/**
	 * @return mixed|string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @return mixed|string
	 */
	public function getPassword()
	{
		return $this->password;
	}


}
