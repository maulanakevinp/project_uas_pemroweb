<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-8 mb-3">
            <div class="card">
                <h5 class="card-header">
                    <?= $data['panenku']['nama'] ?>
                </h5>

                <div class="card-body">
                    <p class="text-muted small float-left">Diupload sejak <?= $data['panenku']['created_at'] ?> </p>
                    <p class="float-right text-muted small">Kategori : <?= $data['panenku']['kategori'] ?></p>
                    <div id="foto" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto1'] ?>" alt="">
                            </div>
                            <?php if (!empty($data['panenku']['foto2'])) { ?>
                                <div class="carousel-item">
                                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto2'] ?>" alt="">
                                </div>
                            <?php } ?>
                            <?php if (!empty($data['panenku']['foto3'])) { ?>
                                <div class="carousel-item">
                                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto3'] ?>" alt="">
                                </div>
                            <?php } ?>
                            <?php if (!empty($data['panenku']['foto4'])) { ?>
                                <div class="carousel-item">
                                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto4'] ?>" alt="">
                                </div>
                            <?php } ?>
                            <?php if (!empty($data['panenku']['foto5'])) { ?>
                                <div class="carousel-item">
                                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto5'] ?>" alt="">
                                </div>
                            <?php } ?>
                            <?php if (!empty($data['panenku']['foto6'])) { ?>
                                <div class="carousel-item">
                                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto6'] ?>" alt="">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#foto" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#foto" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    Harga = Rp. <?= $data['panenku']['harga'] ?> <br>
                    Stok = <?= $data['panenku']['stok'] ?> Kg
                    <h5 class="mt-3">Deskripsi</h5>
                    <p><?= $data['panenku']['deskripsi'] ?></p>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card ">
                <h5 class="card-header">
                    Penjual
                </h5>
                <div class="card-body text-center">
                    <img class="rounded-circle" src="<?= BASEURL ?>/app/models/foto/<?= $data['panenku']['foto_user'] ?>" alt="" width="200px" height="200px">
                    <h5 class="mt-3"><?= $data['panenku']['nama_user'] ?></h5>
                    <?= $data['panenku']['email'] ?> <br>
                    <?= $data['panenku']['nomor_telepon'] ?> <br>
                    <p class="card-text text-muted">
                        Member sejak <?= $data['panenku']['created_at_user'] ?> <br>
                        Terakhir masuk <?= $data['panenku']['updated_at_user'] ?>
                    </p>
                    <a href="<?= BASEURL ?>/profil/user/<?= $data['panenku']['id_user'] ?>" class="btn btn-outline-primary">Lihat Profil</a>
                </div>
            </div>

        </div>
    </div>
</div>