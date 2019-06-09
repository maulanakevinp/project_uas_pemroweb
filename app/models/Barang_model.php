<?php

class Barang_model
{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $query = "SELECT * FROM barang";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBarangByid($id)
    {
        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user, u.created_at as created_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.harga as harga , b.jumlah as jumlah , b.sisa as sisa , b.deskripsi as deskripsi , b.created_at as created_at , b.updated_at as updated_at , b.foto1 as foto1 , b.foto2 as foto2 , b.foto3 as foto3 , b.foto4 as foto4 , b.foto5  as foto5 , b.foto6 as foto6
        FROM barang b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getBarangUser($id)
    {
        $query = "SELECT * FROM barang WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        return $this->db->resultSet();
    }

    public function tambah($data, $file)
    {

        $fotolok1 = $file['foto1']['tmp_name'];
        $foto1   = $file['foto1']['name'];
        $foto1_baru = date('dmYHis') . $foto1;
        $direktori1   = './app/models/barang/' . $foto1_baru;

        $fotolok2 = $file['foto2']['tmp_name'];
        $foto2   = $file['foto2']['name'];
        $foto2_baru = date('dmYHis') . $foto2;
        $direktori2   = './app/models/barang/' . $foto2_baru;

        $fotolok3 = $file['foto3']['tmp_name'];
        $foto3   = $file['foto3']['name'];
        $foto3_baru = date('dmYHis') . $foto3;
        $direktori3   = './app/models/barang/' . $foto3_baru;

        $fotolok4 = $file['foto4']['tmp_name'];
        $foto4   = $file['foto4']['name'];
        $foto4_baru = date('dmYHis') . $foto4;
        $direktori4   = './app/models/barang/' . $foto4_baru;

        $fotolok5 = $file['foto5']['tmp_name'];
        $foto5   = $file['foto5']['name'];
        $foto5_baru = date('dmYHis') . $foto5;
        $direktori5   = './app/models/barang/' . $foto5_baru;

        $fotolok6 = $file['foto6']['tmp_name'];
        $foto6   = $file['foto6']['name'];
        $foto6_baru = date('dmYHis') . $foto6;
        $direktori6   = './app/models/barang/' . $foto6_baru;

        $tanggal = date('Y-m-d');

        $query = "INSERT INTO barang 
        (id_user , nama, id_kategori , harga , jumlah , sisa , deskripsi, created_at, updated_at , foto1 , foto2 , foto3 , foto4 , foto5 , foto6) 
        VALUES 
        (:id_user , :nama , :id_kategori , :harga , :jumlah , :sisa , :deskripsi , :created_at , :updated_at , :foto1 , :foto2 , :foto3 , :foto4 , :foto5 , :foto6 )";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('sisa', $data['sisa']);
        $this->db->bind('created_at', $tanggal);
        $this->db->bind('updated_at', $tanggal);

        if (!empty($fotolok1)) {
            move_uploaded_file($fotolok1, $direktori1);
            $this->db->bind('foto1', $foto1_baru);
        } else {
            $this->db->bind('foto1', "");
        }
        if (!empty($fotolok2)) {
            move_uploaded_file($fotolok2, $direktori2);
            $this->db->bind('foto2', $foto2_baru);
        } else {
            $this->db->bind('foto2', "");
        }
        if (!empty($fotolok3)) {
            move_uploaded_file($fotolok3, $direktori3);
            $this->db->bind('foto3', $foto3_baru);
        } else {
            $this->db->bind('foto3', "");
        }
        if (!empty($fotolok4)) {
            move_uploaded_file($fotolok4, $direktori4);
            $this->db->bind('foto4', $foto4_baru);
        } else {
            $this->db->bind('foto4', "");
        }
        if (!empty($fotolok5)) {
            move_uploaded_file($fotolok5, $direktori5);
            $this->db->bind('foto5', $foto5_baru);
        } else {
            $this->db->bind('foto5', "");
        }
        if (!empty($fotolok6)) {
            move_uploaded_file($fotolok6, $direktori6);
            $this->db->bind('foto6', $foto6_baru);
        } else {
            $this->db->bind('foto6', "");
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubah($id, $data)
    {
        $query = "UPDATE barang SET id_kategori = :id_kategori , nama = :nama , harga = :harga , jumlah = :jumlah , sisa = :sisa , deskripsi = :deskripsi WHERE id = :id ";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('sisa', $data['sisa']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM barang WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahFoto1($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto1']['tmp_name'];
        $nama_file   = $file['foto1']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto1 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto1'])) {
                unlink('./app/models/cover/' . $data['barang']['foto1']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function ubahFoto2($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto2']['tmp_name'];
        $nama_file   = $file['foto2']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto2 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto2'])) {
                unlink('./app/models/cover/' . $data['barang']['foto2']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function ubahFoto3($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto3']['tmp_name'];
        $nama_file   = $file['foto3']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto3 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto3'])) {
                unlink('./app/models/cover/' . $data['barang']['foto3']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function ubahFoto4($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto4']['tmp_name'];
        $nama_file   = $file['foto4']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto4 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto4'])) {
                unlink('./app/models/cover/' . $data['barang']['foto4']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function ubahFoto5($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto5']['tmp_name'];
        $nama_file   = $file['foto5']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto5 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto5'])) {
                unlink('./app/models/cover/' . $data['barang']['foto5']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function ubahFoto6($id, $file)
    {
        $data['barang'] = $this->getBarangByid($id);

        $lokasi_file = $file['foto6']['tmp_name'];
        $nama_file   = $file['foto6']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/barang/' . $foto_baru;

        $query = "UPDATE barang SET foto6 = :foto WHERE id = :id";

        if (empty($lokasi_file)) {
            return null;
        } else {
            if (file_exists('./app/models/cover/' . $data['barang']['foto6'])) {
                unlink('./app/models/cover/' . $data['barang']['foto6']);
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                move_uploaded_file($lokasi_file, $direktori_file);
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function hapusFoto1($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = " UPDATE `barang` SET `foto1` = '' WHERE `id`  = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusFoto2($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = "UPDATE `barang` SET `foto2` = '' WHERE `id` = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusFoto3($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = "UPDATE `barang` SET `foto3` = '' WHERE  `id` = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusFoto4($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = "UPDATE `barang` SET `foto4` = ''  WHERE `id` = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusFoto5($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = "UPDATE `barang` SET `foto5 `  = '' WHERE `id` = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusFoto6($id, $foto)
    {
        unlink('./app/models/barang/' . $foto);
        $query = "UPDATE `barang` SET `foto6` = '' WHERE `id` = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
