<?php


namespace App\Model;


class Question
{

	private string $title;
	private string $message;

	/**
	 * Question constructor.
	 * @param string $title
	 * @param string $message
	 */
	public function __construct(string $title, string $message)
	{
		$this->title = $title;
		$this->message = $message;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @return string
	 */
	public function getMessage(): string
	{
		return $this->message;
	}

}
