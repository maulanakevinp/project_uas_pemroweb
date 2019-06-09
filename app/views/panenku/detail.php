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
                    <img class="mw-100 mb-3" src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto1'] ?>" alt="">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Harga = Rp. <?= $data['panenku']['harga'] ?></p>
                        </div>
                        <div class="col-md-4">
                            <p>Jumlah = <?= $data['panenku']['jumlah'] ?> Kg</p>
                        </div>
                        <div class="col-md-4">
                            <p>Sisa = <?= $data['panenku']['sisa'] ?> Kg</p>
                        </div>
                    </div>
                    <h5>Deskripsi</h5>
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
                    <p class="card-text text-muted">Member sejak <?= $data['panenku']['created_at_user'] ?> </p>
                </div>
            </div>

        </div>
    </div>
</div>