<div class="container">
    <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <div class="mb-3 img-thumbnail" style="width: 100%; height: 200px;">
                <img src="" alt="cover" width="100%" height="200px">
            </div>
            <div class="float-left mr-3" style="width: 200px; height: 200px;">
                <img class="rounded-circle" src="<?= $data['user']['foto'] ?>" alt="foto profil" width="200" height="200">
            </div>
            <h5 class="card-title "><?= $data['user']['username'] ?></h5>

            <p class="card-text">Member sejak <?= $data['user']['created_at'] ?> </p>
            <a href="#" class="btn btn-light">Edit Profil</a>
        </div>
    </div>
</div>