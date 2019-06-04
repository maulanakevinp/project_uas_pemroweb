<?php

/**
 * 
 */
class User_model
{
	private $db;
	private $id = 0;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	function __construct()
	{
		$this->db = new Database;
	}

	public function getAll()
	{
		$query = "SELECT * FROM users";
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function login($data)
	{
		$query = "SELECT * FROM users WHERE email = :email AND password = :password ";
		$this->db->query($query);
		$this->db->bind('email', $data['email']);
		$this->db->bind('password', $data['password']);

		return $this->db->single();
	}

	public function getUserById($id)
	{
		$query = "SELECT * FROM users WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->single();
	}
}
