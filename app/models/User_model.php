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
		$this->db->bind('password', md5($data['password']));

		return $this->db->single();
	}

	public function getUserByEmail($email)
	{
		$query = "SELECT * FROM users WHERE email = :email";
		$this->db->query($query);
		$this->db->bind('email', $email);
		return $this->db->single();
	}

	public function daftar($data)
	{
		$query = "INSERT INTO users (nama,email,password,id_level_user)VALUES ( :nama , :email , :password , 2 )";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['emaild']);
		$this->db->bind('password', md5($data['passwordd']));

		$this->db->execute();

		return $this->db->rowCount();
	}
}
