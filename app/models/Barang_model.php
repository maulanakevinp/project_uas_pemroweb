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
}
