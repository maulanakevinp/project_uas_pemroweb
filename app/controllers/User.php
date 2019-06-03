<?php
class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header-user', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function masuk()
    {
        header('Location: ' . BASEURL . '/user');
    }
}
