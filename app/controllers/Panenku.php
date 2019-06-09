<?php

class Panenku extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['panenku'] = $this->model('Barang_model')->getBarangUser($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
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
        $_SESSION['username'] = $data['user']['username'];
        $this->view('templates/header', $data);
        $this->view('panenku/tambah', $data);
        $this->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
        $data['panenku'] = $this->model('Barang_model')->getBarangByid($id);
        $_SESSION['username'] = $data['user']['username'];
        $this->view('templates/header', $data);
        $this->view('panenku/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambahPanenku()
    {
        if ($this->model('Barang_model')->tambah($_POST, $_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Panenku telah ditambahkan', 'success');
            header('Location: ' . BASEURL . '/panenku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Panenku tidak bertambah', 'danger');
            header('Location: ' . BASEURL . '/panenku');
            exit;
        }
    }
}
