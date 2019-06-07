<?php
class Home extends Controller
{
    public function __construct()
    { }
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }

    public function masuk()
    {
        $data['user'] = $this->model('User_model')->login($_POST);
        if (isset($data['user']['id'])) {
            $_SESSION['id'] = $data['user']['id'];
            header('Location: ' . BASEURL);
        } else {
            Flasher::setFlash('Gagal', 'Masuk', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function keluar()
    {
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }

    public function daftar()
    {
        if ($_POST['passwordd'] == $_POST['cpassword']) {
            if ($this->model('User_model')->daftar($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'Daftar', 'success');
                header('Location: ' . BASEURL);
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Daftar', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function lupa()
    {
        if ($this->model('User_model')->getUserByEmail($_POST['emaill']) > 0) {
            Flasher::setFlash('Berhasil', 'Silahkan Cek Email', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Anda Bukan User', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
