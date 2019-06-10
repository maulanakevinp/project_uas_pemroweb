<div class="container">
    <div class="card">
        <h5 class="card-header">
            Panenku
            <a href="<?= BASEURL ?>/panenku/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="Cari Buah-buahan atau Sayuran" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </li>
            <?php if (!$data['panenku']) { ?>
                <li class="list-group-item">
                    Belum ada hasil panen
                </li>
            <?php } else {
            foreach ($data['panenku'] as $panenku) : ?>
                    <li class="list-group-item ">
                        <a class="card-link float-left" href="<?= BASEURL; ?>/panenku/detail/<?= $panenku['id']; ?>">
                            <img class="float-left mr-3" src="<?= BASEURL ?>/app/models/barang/<?= $panenku['foto1']; ?>" alt="" width="100px;" height="100px">
                            <div class="">
                                <h5 class="text-body"><?= $panenku['nama']; ?></h5>
                                <p class="text-muted small">Ditambahkan sejak <?= $panenku['created_at']; ?> </p>
                                <p class="text-muted">Rp. <?= $panenku['harga']; ?>/Kg</p>
                                <p class="text-body"><?= $panenku['deskripsi']; ?></p>
                            </div>
                        </a>
                        <a href="<?= BASEURL; ?>/panenku/hapus/<?= $panenku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                        <a href="<?= BASEURL; ?>/panenku/ubah/<?= $panenku['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                    </li>
                <?php endforeach;
        } ?>
        </ul>
    </div>
</div>