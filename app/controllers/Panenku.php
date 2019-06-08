<?php

class Panenku extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['panenku'] = $this->model('Barang_model')->getBarangUser($_SESSION['id']);
            $_SESSION['nama'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('panenku/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function tambah()
    {
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
        $_SESSION['nama'] = $data['user']['username'];
        $this->view('templates/header', $data);
        $this->view('panenku/tambah', $data);
        $this->view('templates/footer');
    }
}
