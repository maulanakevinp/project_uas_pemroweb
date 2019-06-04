<?php

class Home extends Controller
{
    public function __construct()
    { }

    public function index()
    {
        $_SESSION["status"] = "keluar";
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        $this->view('templates/header-home', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function masuk()
    {
        $data['user'] = $this->model('User_model')->login($_POST);
        if ($data['user']['id_level_user'] == 1) {
            $_SESSION["status"] = "login";
            header('Location: ' . BASEURL . '/user/index/' . $data['user']['id']);
            exit;
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
