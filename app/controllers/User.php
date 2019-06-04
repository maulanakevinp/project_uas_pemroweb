<?php
class User extends Controller
{
    public function index()
    {
        if ($_SESSION['status'] == "login") {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $this->view('templates/header-user', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        } else if ($_SESSION['status'] == "keluar") {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function keluar()
    {
        session_destroy();
        $_SESSION['status'] == "keluar";
        header('Location: ' . BASEURL);
        exit;
    }
}
