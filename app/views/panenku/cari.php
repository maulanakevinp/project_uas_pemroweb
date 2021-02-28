<div class="container">
    <div class="card">
        <h5 class="card-header">
            Panenku
            <a href="<?= BASEURL ?>panenku/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form id="cari" action="<?= BASEURL ?>panenku/cari" class="input-group p-2" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="cari" aria-describedby="cari" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['panenku']) { ?>
                <li class="list-group-item">
                    Kosong
                </li>
            <?php } else {
            foreach ($data['panenku'] as $panenku) : ?>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-10">
                            <a class="card-link float-left" href="<?= BASEURL ?>panenku/detail/<?= $panenku['id']; ?>">
                                <img class="float-left mr-3" src="<?= BASEURL ?>app/models/barang/<?= $panenku['foto1']; ?>" alt="" width="100px;" height="100px">
                                <div class="">
                                    <h5 class="text-body"><?= $panenku['nama']; ?></h5>
                                    <p class="text-muted small">Ditambahkan sejak <?= $panenku['created_at']; ?> </p>
                                    <p class="text-muted">Rp. <?= $panenku['harga']; ?>/Kg</p>
                                    <p class="text-body"><?= $panenku['deskripsi']; ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= BASEURL ?>panenku/hapus/<?= $panenku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                            <a href="<?= BASEURL ?>panenku/ubah/<?= $panenku['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                        </div>
                    </div>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>