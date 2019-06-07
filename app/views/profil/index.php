<div class="container">
    <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <div class="mb-3 img-thumbnail" style="width: 100%; height: 200px;">
                <img src="<?= BASEURL ?>/app/models/cover/<?= $data['user']['cover'] ?>" alt="cover" width="100%" height="200px">
            </div>
            <div class="float-left mr-3" style="width: 20%; height: 200px;">
                <img class="rounded-circle" src="<?= BASEURL ?>/app/models/foto/<?= $data['user']['foto'] ?>" alt="foto profil" width="200" height="200">
            </div>
            <h5 class="card-title "><?= $data['user']['username'] ?></h5>
            <p>Email : <?= $data['user']['email'] ?></p>
            <p>Nomor : <?= $data['user']['nomor_telepon'] ?></p>
            <p class="card-text text-muted">Member sejak <?= $data['user']['created_at'] ?> </p>
            <a href="<?= BASEURL ?>/pengaturan" class="btn btn-light">Edit Profil</a>
        </div>
    </div>
</div>