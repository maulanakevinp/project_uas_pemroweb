<?php

class Home extends Controller
{
    public function __construct()
    { }

    public function index()
    {
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        $this->view('templates/header-home', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
