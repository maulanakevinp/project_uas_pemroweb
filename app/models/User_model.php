<?php

/**
 * 
 */
class User_model
{
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	public function masuk($data)
	{
		$query = "SELECT * FROM users WHERE email = :email AND password = :password ";
		$this->db->query($query);
		$this->db->bind('email', $data['email']);
		$this->db->bind('password', $data['password']);

		return $this->db->single();
	}
}
