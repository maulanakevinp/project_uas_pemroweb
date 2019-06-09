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

	public function daftar($data, $file)
	{
		$lokasi_foto = $file['foto']['tmp_name'];
		$nama_foto   = $file['foto']['name'];
		$foto_baru = date('dmYHis') . $nama_foto;
		$direktori_foto   = './app/models/foto/' . $foto_baru;
		$pindah_foto = move_uploaded_file($lokasi_foto, $direktori_foto);

		$lokasi_cover = $file['cover']['tmp_name'];
		$nama_cover   = $file['cover']['name'];
		$cover_baru = date('dmYHis') . $nama_cover;
		$direktori_cover   = './app/models/cover/' . $cover_baru;
		$pindah_cover = move_uploaded_file($lokasi_cover, $direktori_cover);

		$tanggal = date('Y-m-d');

		$query = "INSERT INTO users 
		(id_level_user , nama , username , email , password , nomor_telepon , alamat , foto , cover , created_at , updated_at) 
		VALUES 
		( :id_level_user , :nama , :username , :email , :password , :nomor_telepon , :alamat , :foto , :cover , :created_at , :updated_at)";

		if ($pindah_foto && $pindah_cover) {
			$this->db->query($query);
			$this->db->bind('id_level_user', 2);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('username', $data['username']);
			$this->db->bind('email', $data['email']);
			$this->db->bind('password', md5($data['password']));
			$this->db->bind('nomor_telepon', $data['nomor_telepon']);
			$this->db->bind('alamat', $data['alamat']);
			$this->db->bind('foto', $foto_baru);
			$this->db->bind('cover', $cover_baru);
			$this->db->bind('created_at', $tanggal);
			$this->db->bind('updated_at', $tanggal);
			$this->db->execute();

			return $this->db->rowCount();
		} else {
			return null;
		}
	}

	public function ubahDetailKontak($data)
	{
		$query = "UPDATE users SET nama = :nama , username = :username , nomor_telepon = :nomor_telepon WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('nomor_telepon', $data['nomor_telepon']);
		$this->db->bind('id', $_SESSION['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahFotoProfil($file)
	{
		$data['user'] = $this->getUserByid($_SESSION['id']);

		$lokasi_file = $file['foto']['tmp_name'];
		$nama_file   = $file['foto']['name'];
		$foto_baru = date('dmYHis') . $nama_file;
		$direktori   = './app/models/foto/' . $foto_baru;

		$query = "UPDATE users SET foto = :foto WHERE id = :id";

		if (file_exists('./app/models/foto/' . $data['user']['foto'])) {
			if (unlink('./app/models/foto/' . $data['user']['foto'])) {
				if (move_uploaded_file($lokasi_file, $direktori)) {
					$this->db->query($query);
					$this->db->bind('foto', $foto_baru);
					$this->db->bind('id', $_SESSION['id']);
					$this->db->execute();
					return $this->db->rowCount();
				} else {
					return null;
				}
			} else {
				return null;
			}
		} else {
			if (move_uploaded_file($lokasi_file, $direktori)) {
				$this->db->query($query);
				$this->db->bind('foto', $foto_baru);
				$this->db->bind('id', $_SESSION['id']);
				$this->db->execute();
				return $this->db->rowCount();
			} else {
				return null;
			}
		}
	}

	public function ubahCoverProfil($cover)
	{
		$data['user'] = $this->getUserByid($_SESSION['id']);

		$lokasi_file = $cover['cover']['tmp_name'];
		$nama_file   = $cover['cover']['name'];
		$foto_baru = date('dmYHis') . $nama_file;
		$direktori   = './app/models/cover/' . $foto_baru;

		$query = "UPDATE users SET cover = :cover WHERE id = :id";

		if (file_exists('./app/models/cover/' . $data['user']['cover'])) {
			if (unlink('./app/models/cover/' . $data['user']['cover'])) {
				if (move_uploaded_file($lokasi_file, $direktori)) {
					$this->db->query($query);
					$this->db->bind('cover', $foto_baru);
					$this->db->bind('id', $_SESSION['id']);
					$this->db->execute();
					return $this->db->rowCount();
				} else {
					return null;
				}
			} else {
				return null;
			}
		} else {
			if (move_uploaded_file($lokasi_file, $direktori)) {
				$this->db->query($query);
				$this->db->bind('cover', $foto_baru);
				$this->db->bind('id', $_SESSION['id']);
				$this->db->execute();
				return $this->db->rowCount();
			} else {
				return null;
			}
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
