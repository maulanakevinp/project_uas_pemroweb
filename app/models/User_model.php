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
	public function getAll()
	{
		$query = "SELECT * FROM users";
		$this->db->query($query);
		return $this->db->resultSet();
	}
	public function login($data)
	{
		$query = "SELECT * FROM users WHERE (username = :username OR email = :email) AND password = :password ";
		$this->db->query($query);
		$this->db->bind('username', $data['email-username']);
		$this->db->bind('email', $data['email-username']);
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
		$tanggal = date('Y-m-d');
		$query = "INSERT INTO users (id_level_user,username,email,password,created_at,updated_at)VALUES ( :id_level_user , :nama , :email , :password , :created_at , :updated_at)";
		$this->db->query($query);
		$this->db->bind('id_level_user', 2);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['emaild']);
		$this->db->bind('password', md5($data['passwordd']));
		$this->db->bind('created_at', $tanggal);
		$this->db->bind('updated_at', $tanggal);
		$this->db->execute();
		return $this->db->rowCount();
	}
}
