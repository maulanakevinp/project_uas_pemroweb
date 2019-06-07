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

	public function getUserByid($id)
	{
		$query = "SELECT * FROM users WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function daftar($data)
	{
		$tanggal = date('Y-m-d');
		$query = "INSERT INTO users (id_level_user,username,email,password,created_at,updated_at)VALUES ( :id_level_user , :username , :email , :password , :created_at , :updated_at)";
		$this->db->query($query);
		$this->db->bind('id_level_user', 2);
		$this->db->bind('username', $data['username']);
		$this->db->bind('email', $data['emaild']);
		$this->db->bind('password', md5($data['passwordd']));
		$this->db->bind('created_at', $tanggal);
		$this->db->bind('updated_at', $tanggal);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDetailKontak($data)
	{
		$query = "UPDATE users SET username = :username , nomor_telepon = :nomor_telepon WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('nomor_telepon', $data['nomor_telepon']);
		$this->db->bind('id', $_SESSION['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahFotoProfil($file)
	{
		$data['user'] = $this->getUserByid($_SESSION['id']);

		$destination_path = getcwd() . DIRECTORY_SEPARATOR . '/app/models/foto/';

		$lokasi_file = $file['foto']['tmp_name'];
		$nama_file   = $file['foto']['name'];
		$direktori   = $destination_path . basename("$nama_file");

		$query = "UPDATE users SET foto = :foto WHERE id = :id";

		if (file_exists("foto/" . $data['user']['foto'])) {
			if (!empty($lokasi_file)) {
				unlink("foto/" . $data['user']['foto']);
				move_uploaded_file($lokasi_file, $direktori);
				$this->db->query($query);
				$this->db->bind('foto', $nama_file);
				$this->db->bind('id', $_SESSION['id']);
				$this->db->execute();
				return $this->db->rowCount();
			}
		} else {
			move_uploaded_file($lokasi_file, $direktori);
			$this->db->query($query);
			$this->db->bind('foto', $nama_file);
			$this->db->bind('id', $_SESSION['id']);
			$this->db->execute();
			return $this->db->rowCount();
		}
	}

	public function ubahCoverProfil($cover)
	{
		$data['user'] = $this->getUserByid($_SESSION['id']);

		$destination_path = getcwd() . DIRECTORY_SEPARATOR . '/app/models/cover/';

		$lokasi_file = $cover['cover']['tmp_name'];
		$nama_file   = $cover['cover']['name'];
		$direktori   = $destination_path . basename("$nama_file");

		$query = "UPDATE users SET cover = :cover WHERE id = :id";

		if (file_exists("cover/" . $data['user']['cover'])) {
			if (!empty($lokasi_file)) {
				unlink("cover/" . $data['user']['cover']);
				move_uploaded_file($lokasi_file, $direktori);
				$this->db->query($query);
				$this->db->bind('cover', $nama_file);
				$this->db->bind('id', $_SESSION['id']);
				$this->db->execute();
				return $this->db->rowCount();
			}
		} else {
			move_uploaded_file($lokasi_file, $direktori);
			$this->db->query($query);
			$this->db->bind('cover', $nama_file);
			$this->db->bind('id', $_SESSION['id']);
			$this->db->execute();
			return $this->db->rowCount();
		}
	}

	public function ubahPassword($data)
	{
		$query = "UPDATE users SET password = :password WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('password', md5($data['passwordb']));
		$this->db->bind('id', $_SESSION['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
}
