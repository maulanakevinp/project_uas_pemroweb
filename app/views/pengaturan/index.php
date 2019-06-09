<div class="container">
    <?php Flasher::flash() ?>
    <div class="card">
        <h5 class="card-header">
            Pengaturan Akun
        </h5>
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="ubah-detail-kontak" data-toggle="tab" href="#nav-ubah-detail-kontak" role="tab" aria-controls="nav-ubah-detail-kontak" aria-selected="true">Ubah detail kontak</a>
                    <a class="nav-item nav-link" id="ubah-detail-profil" data-toggle="tab" href="#nav-ubah-foto-profil" role="tab" aria-controls="nav-ubah-foto-profil" aria-selected="false">Ubah foto profil</a>
                    <a class="nav-item nav-link" id="ubah-detail-profil" data-toggle="tab" href="#nav-ubah-cover-profil" role="tab" aria-controls="nav-ubah-cover-profil" aria-selected="false">Ubah cover profil</a>
                    <a class="nav-item nav-link" id="ubah-password" data-toggle="tab" href="#nav-ubah-password" role="tab" aria-controls="nav-ubah-password" aria-selected="false">Ubah password</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ubah-detail-kontak" role="tabpanel" aria-labelledby="ubah-detail-kontak">
                    <div class="container mt-2">
                        <form action="<?= BASEURL ?>/pengaturan/ubahDetailKontak" method="post">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['user']['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" class="form-control" id="username" name="username" value="<?= $data['user']['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon">Nomor telepon</label>
                                <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= $data['user']['nomor_telepon'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['user']['alamat'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ubah-foto-profil" role="tabpanel" aria-labelledby="ubah-foto-profil">
                    <div class="container mt-2">
                        <form action="<?= BASEURL ?>/pengaturan/ubahFotoProfil" enctype="multipart/form-data" method="post">
                            <center>
                                <div class="mb-3 rounded-circle" style="width: 200px; height: 200px; background:url('<?= BASEURL ?> /assets/img/icon/5925094_4_256x256_1495095625.png'); background-size: 200px 200px">
                                    <img class="rounded-circle" src="<?= BASEURL ?>/app/models/foto/<?= $data['user']['foto'] ?>" alt="" width="100%" height="100%">
                                </div>
                                <div>
                                    <p>Upload foto profil anda untuk menambah nilai kepercayaan pembeli</p>
                                </div>
                            </center>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" aria-describedby="foto" required>
                                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="foto">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ubah-cover-profil" role="tabpanel" aria-labelledby="ubah-cover-profil">
                    <div class="container mt-2">
                        <form action="<?= BASEURL ?>/pengaturan/ubahCoverProfil" enctype="multipart/form-data" method="post">

                            <div class="mb-3 " style="width: 100%; height: 200px; background:url('<?= BASEURL ?>/assets/img/picture/abstract-green-wallpapers-hd-desktop-and-mobile-backgrounds.jpg'); background-size: 100% 200px">
                                <img src="<?= BASEURL ?>/app/models/cover/<?= $data['user']['cover'] ?>" alt="" width="100%" height="200px">
                            </div>
                            <div>
                                <p>Upload cover profil anda untuk menambah nilai kepercayaan pembeli</p>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="cover" name="cover" aria-describedby="cover" required>
                                    <label class="custom-file-label" for="cover">Pilih Cover</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="cover">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ubah-password" role="tabpanel" aria-labelledby="ubah-password">
                    <div class="container mt-2">
                        <form action="<?= BASEURL ?>/pengaturan/ubahPassword" method="post">
                            <div class="form-group">
                                <label for="password">Password Lama</label>
                                <input type="password" class="form-control" id="passwordl" name="passwordl" value="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="password" class="form-control" id="passwordb" name="passwordb">
                            </div>
                            <div class="form-group">
                                <label for="cpassword">Ulangi Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>