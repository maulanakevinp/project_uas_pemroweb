<div class="container">
    <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <div class="mb-3" style="width: 100%; height: 200px; background:url('<?= BASEURL ?>/assets/img/picture/abstract-green-wallpapers-hd-desktop-and-mobile-backgrounds.jpg'); background-size: 100% 200px">
                <img src="<?= BASEURL ?>/app/models/cover/<?= $data['user']['cover'] ?>" alt="" width="100%" height="100%">
            </div>
            <div class="float-left mr-3 rounded-circle" style="width: 200px; height: 200px;  background:url('<?= BASEURL ?> /assets/img/icon/5925094_4_256x256_1495095625.png'); background-size: 200px 200px"">
                <img class=" rounded-circle" src="<?= BASEURL ?>/app/models/foto/<?= $data['user']['foto'] ?>" alt="" width="100%" height="100%">
            </div>
            <h5 class="card-title "><?= $data['user']['nama'] ?></h5>
            <p>Email : <?= $data['user']['email'] ?></p>
            <p>Nomor : <?= $data['user']['nomor_telepon'] ?></p>
            <p class="card-text text-muted">Member sejak <?= $data['user']['created_at'] ?> </p>
            <a href="<?= BASEURL ?>/pengaturan" class="btn btn-light">Edit Profil</a>
        </div>
    </div>
    <div class="card mt-5">
        <h5 class="card-header">
            Hasil Panen
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form class="input-group" action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="Cari Buah-buahan atau Sayuran" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['panenku']) { ?>
                <li class="list-group-item">
                    Belum ada hasil panen
                </li>
            <?php } else {
            foreach ($data['panenku'] as $panenku) : ?>
                    <a href="<?= BASEURL; ?>/panenku/detail/<?= $panenku['id']; ?>">
                        <li class="list-group-item ">
                            <?= $panenku['nama']; ?>
                            <a href="<?= BASEURL; ?>/panenku/hapus/<?= $panenku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                            <a href="<?= BASEURL; ?>/panenku/ubah/<?= $panenku['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $panenku['id']; ?>">Ubah</a>
                        </li>
                    </a>
                <?php endforeach;
        } ?>
        </ul>
    </div>
</div>