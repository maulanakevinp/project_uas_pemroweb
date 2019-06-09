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
        return $this->db->resultSet();
    }

    public function tambah($data, $file)
    {

        $fotolok1 = $file['foto1']['tmp_name'];
        $foto1   = $file['foto1']['name'];
        $foto1_baru = date('dmYHis') . $foto1;
        $direktori1   = './app/models/barang/' . $foto1_baru;

        $fotolok2 = $file['foto2']['tmp_name'];
        $foto2   = $file['foto2']['name'];
        $foto2_baru = date('dmYHis') . $foto2;
        $direktori2   = './app/models/barang/' . $foto2_baru;

        $fotolok3 = $file['foto3']['tmp_name'];
        $foto3   = $file['foto3']['name'];
        $foto3_baru = date('dmYHis') . $foto3;
        $direktori3   = './app/models/barang/' . $foto3_baru;

        $fotolok4 = $file['foto4']['tmp_name'];
        $foto4   = $file['foto4']['name'];
        $foto4_baru = date('dmYHis') . $foto4;
        $direktori4   = './app/models/barang/' . $foto4_baru;

        $fotolok5 = $file['foto5']['tmp_name'];
        $foto5   = $file['foto5']['name'];
        $foto5_baru = date('dmYHis') . $foto5;
        $direktori5   = './app/models/barang/' . $foto5_baru;

        $fotolok6 = $file['foto6']['tmp_name'];
        $foto6   = $file['foto6']['name'];
        $foto6_baru = date('dmYHis') . $foto6;
        $direktori6   = './app/models/barang/' . $foto6_baru;

        $query = "INSERT INTO barang 
        (id_user , nama, id_kategori , harga , jumlah , sisa , deskripsi , foto1 , foto2 , foto3 , foto4 , foto5 , foto6) 
        VALUES 
        (:id_user , :nama , :id_kategori , :harga , :jumlah , :sisa , :deskripsi , :foto1 , :foto2 , :foto3 , :foto4 , :foto5 , :foto6 )";

        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('sisa', $data['sisa']);
        $this->db->bind('foto1', $foto1_baru);
        $this->db->bind('foto2', $foto2_baru);
        $this->db->bind('foto3', $foto3_baru);
        $this->db->bind('foto4', $foto4_baru);
        $this->db->bind('foto5', $foto5_baru);
        $this->db->bind('foto6', $foto6_baru);

        $this->db->execute();

        move_uploaded_file($fotolok1, $direktori1);
        move_uploaded_file($fotolok2, $direktori2);
        move_uploaded_file($fotolok3, $direktori3);
        move_uploaded_file($fotolok4, $direktori4);
        move_uploaded_file($fotolok5, $direktori5);
        move_uploaded_file($fotolok6, $direktori6);

        return $this->db->rowCount();
    }
}
