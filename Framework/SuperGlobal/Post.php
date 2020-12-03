<?php


namespace BK_Framework\SuperGlobal;


use BK_Framework\Helper\JSON;

/**
 * Class Post
 *
 * Helper class for easy use of super-global variable $_POST
 *
 * @package BK_Framework\SuperGlobal
 */
class Post
{

	/**
	 * Obtain value associated with the provided key or null if key does not exist
	 *
	 * @param string $key
	 * @return string|null
	 */
	public static function get(string $key) : ?string
	{
		return $_POST[$key] ?? null;
	}

	/**
	 * Determine if provided key exists in super-global array
	 *
	 * @param string $key
	 * @return bool
	 */
	public static function has(string $key) : bool
	{
		return isset($_POST[$key]);
	}

	/**
	 * Returns all keys present in the super-global array
	 *
	 * @return array
	 */
	public static function keySet() : array
	{
		return array_keys($_POST);
	}

	public static function requestBody() : array
	{
		return JSON::decode(file_get_contents('php://input'));
	}

}
