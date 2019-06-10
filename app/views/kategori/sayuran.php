<div class="container">
    <div class="card mt-5">
        <h5 class="card-header">
            Hasil Panen
        </h5>
        <ul class="list-group list-group-flush">
            <?php if (!$data['hasil_panen']) { ?>
                <li class="list-group-item">
                    Kosong
                </li>
            <?php } else {
            foreach ($data['hasil_panen'] as $panenku) : ?>
                    <li class="list-group-item ">
                        <a class="card-link" href="<?= BASEURL; ?>/panenku/detail/<?= $panenku['id']; ?>">
                            <img class="float-left mr-3" src="<?= BASEURL ?>/app/models/barang/<?= $panenku['foto1']; ?>" alt="" width="100px;" height="100px">
                            <div class="">
                                <h5 class="text-body"><?= $panenku['nama']; ?></h5>
                                <p class="text-muted small">Ditambahkan sejak <?= $panenku['created_at']; ?>, Diubah sejak <?= $panenku['created_at']; ?></p>
                                <p class="text-muted">Rp. <?= $panenku['harga']; ?>/Kg</p>
                                <p class="text-body"><?= $panenku['deskripsi']; ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach;
        } ?>
        </ul>
    </div>
</div>