<?php


namespace App\Model;


class Answer
{

	private int $id;
	private int $questionId;
	private int $userId;
	private string $message;
	private int $voteNumber;

	/**
	 * Answer constructor.
	 * @param int $questionId
	 * @param int $userId
	 * @param string $message
	 */
	public function __construct(int $questionId, int $userId, string $message)
	{
		$this->questionId = $questionId;
		$this->userId = $userId;
		$this->message = $message;
	}

	/**
	 * @return int
	 */
	public function getQuestionId(): int
	{
		return $this->questionId;
	}

	/**
	 * @return int
	 */
	public function getUserId(): int
	{
		return $this->userId;
	}

	/**
	 * @return string
	 */
	public function getMessage(): string
	{
		return $this->message;
	}

}
