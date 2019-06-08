<div class="container">
    <div class="card">
        <h5 class="card-header">
            Panenku <a href="<?= BASEURL ?>/panenku/tambah" class="btn btn-primary">Tambah</a>
        </h5>
        <div class="card-body">
            <?php if (!$data['panenku']) { ?>
                Belum ada hasil panen
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
        </div>
    </div>
</div>