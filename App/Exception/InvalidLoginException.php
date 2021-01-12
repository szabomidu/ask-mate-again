<?php


namespace App\Exception;


use Exception;

class InvalidLoginException extends Exception
{
    /**
     * InvalidLoginException constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}