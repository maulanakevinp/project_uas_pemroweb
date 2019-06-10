<?php

class Profil extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['panenku'] = $this->model('Barang_model')->getBarangUser($data['user']['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['user']['created_at'] = $this->tgl_indo($data['user']['created_at']);
            $data['user']['updated_at'] = $this->tgl_indo($data['user']['updated_at']);
            $this->view('templates/header', $data);
            $this->view('profil/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function user($id)
    {
        $data['penjual'] = $this->model('User_model')->getUserByid($id);
        $data['panenku'] = $this->model('Barang_model')->getBarangUser($id);

        if (empty($data['penjual']) && empty($data['panenku'])) {
            header('Location: ' . BASEURL);
            exit;
        } else {
            if (isset($_SESSION['id'])) {
                $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
                $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
                $_SESSION['username'] = $data['user']['username'];
                $_SESSION['foto'] = $data['user']['foto'];
                $data['penjual']['created_at'] = $this->tgl_indo($data['penjual']['created_at']);
                $this->view('templates/header', $data);
                $this->view('profil/user', $data);
                $this->view('templates/footer');
            } else {
                $data['judul'] = 'Toko Jual Beli Hasil Panen Online Lengkap | Manenin';
                $data['penjual']['created_at'] = $this->tgl_indo($data['penjual']['created_at']);
                $this->view('templates/header');
                $this->view('profil/user', $data);
                $this->view('templates/footer');
            }
        }
    }

    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
