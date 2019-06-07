<?php

class Pengaturan extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('pengaturan/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFotoProfil()
    {
        if ($this->model('User_model')->ubahFotoProfil($_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Foto profil telah berubah', 'success');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Foto profil tidak berubah', 'danger');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        }
    }

    public function ubahCoverProfil()
    {
        if ($this->model('User_model')->ubahCoverProfil($_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Cover profil telah berubah', 'success');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Cover profil tidak berubah', 'danger');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        }
    }

    public function ubahDetailKontak()
    {
        if ($this->model('User_model')->ubahDetailKontak($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Detail kontak telah berubah', 'success');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        }
    }

    public function ubahPassword()
    {
        $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
        $pass = md5($_POST['passwordl']);
        if ($pass == $data['user']['password']) {
            if ($_POST['passwordb'] == $_POST['cpassword']) {
                if ($this->model('User_model')->ubahPassword($_POST) > 0) {
                    Flasher::setFlash('Berhasil', 'Password telah berubah', 'success');
                    header('Location: ' . BASEURL . '/pengaturan');
                    exit;
                }
            } else {
                Flasher::setFlash('Gagal', 'Password baru tidak sama', 'danger');
                header('Location: ' . BASEURL . '/pengaturan');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Password Lama Salah', 'danger');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        }
    }
}
