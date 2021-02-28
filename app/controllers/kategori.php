<?php

class kategori extends Controller
{

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['hasil_panen'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function sayuran()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getSayuran();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['hasil_panen'] = $this->model('Barang_model')->getSayuran();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function buah_buahan()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getBuah_buahan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['hasil_panen'] = $this->model('Barang_model')->getBuah_buahan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function beras_dan_biji_bijian()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getBeras_dan_biji_bijian();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['hasil_panen'] = $this->model('Barang_model')->getBeras_dan_biji_bijian();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }
}