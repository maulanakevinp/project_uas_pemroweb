<?php

class Profil extends Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        $data['user'] = $this->model('User_model')->getUserByEmail($_SESSION['email']);
        $_SESSION['nama'] = $data['user']['nama'];
        $this->view('templates/header', $data);
        $this->view('profil/index', $data);
        $this->view('templates/footer');
    }
}
