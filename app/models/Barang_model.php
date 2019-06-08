<?php

class Barang_model
{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $query = "SELECT * FROM barang";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBarangByid($id)
    {
        $query = "SELECT * FROM barang WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getBarangUser($id)
    {
        $query = "SELECT * FROM barang WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        return $this->db->single();
    }

    public function tambah($data, $file)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        $fotolok1 = $file['foto1']['tmp_name'];
        $foto1   = $file['foto1']['name'];
        $direktori1   = './app/models/barang/' . $foto1;

        $fotolok2 = $file['foto2']['tmp_name'];
        $foto2   = $file['foto2']['name'];
        $direktori2   = './app/models/barang/' . $foto2;

        $fotolok3 = $file['foto3']['tmp_name'];
        $foto3   = $file['foto3']['name'];
        $direktori3   = './app/models/barang/' . $foto3;

        $fotolok4 = $file['foto4']['tmp_name'];
        $foto4   = $file['foto4']['name'];
        $direktori4   = './app/models/barang/' . $foto4;

        $fotolok5 = $file['foto5']['tmp_name'];
        $foto5   = $file['foto5']['name'];
        $direktori5   = './app/models/barang/' . $foto5;

        $fotolok6 = $file['foto6']['tmp_name'];
        $foto6   = $file['foto6']['name'];
        $direktori6   = './app/models/barang/' . $foto6;

        $fotolok7 = $file['foto7']['tmp_name'];
        $foto7   = $file['foto7']['name'];
        $direktori7   = './app/models/barang/' . $foto7;

        $fotolok8 = $file['foto8']['tmp_name'];
        $foto8   = $file['foto8']['name'];
        $direktori8   = './app/models/barang/' . $foto8;

        $query = "INSERT INTO barang (id_user,nama,id_jenis,harga,jumlah,sisa,kategori,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8) VALUES (:id_user , :nama , :id_jenis , :harga , :jumlah , :sisa , :kategori , :foto1 , :foto2 , :foto3 , :foto4 , :foto5 , :foto6 , :foto7 , :foto8 )";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('nama', $data['username']);
        $this->db->bind('id_jenis', $data['jenis']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('sisa', $data['sisa']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('foto1', $foto1);
        $this->db->bind('foto2', $foto2);
        $this->db->bind('foto3', $foto3);
        $this->db->bind('foto4', $foto4);
        $this->db->bind('foto5', $foto5);
        $this->db->bind('foto6', $foto6);
        $this->db->bind('foto7', $foto7);
        $this->db->bind('foto8', $foto8);

        $this->db->execute();

        move_uploaded_file($fotolok1, $direktori1);
        move_uploaded_file($fotolok2, $direktori2);
        move_uploaded_file($fotolok3, $direktori3);
        move_uploaded_file($fotolok4, $direktori4);
        move_uploaded_file($fotolok5, $direktori5);
        move_uploaded_file($fotolok6, $direktori6);
        move_uploaded_file($fotolok7, $direktori7);
        move_uploaded_file($fotolok8, $direktori8);

        return $this->db->rowCount();
    }
}
