<?php


namespace App\Exception;


use Exception;

class InvalidRegistrationException extends Exception
{

	/**
	 * InvalidRegistrationException constructor.
	 * @param string $message
	 */
    public function __construct(string $message)
    {
    	parent::__construct($message);
    }

}
