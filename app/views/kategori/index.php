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
                    <a class="card-link" href="<?= BASEURL ?>panenku/detail/<?= $panenku['id']; ?>">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <img class="" src="<?= BASEURL ?>app/models/barang/<?= $panenku['foto1']; ?>" alt="" width="100%;">
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-body"><?= $panenku['nama']; ?></h5>
                                <p class="text-body"><?= $panenku['deskripsi']; ?></p>
                            </div>
                            <div class="col-md-3 d-flex align-items-end flex-column">
                                <p class="text-muted">Rp. <?= $panenku['harga']; ?>/Kg</p>
                                <p class="text-muted small mt-auto">
                                    Ditambahkan sejak <?= $panenku['created_at']; ?> <br>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>