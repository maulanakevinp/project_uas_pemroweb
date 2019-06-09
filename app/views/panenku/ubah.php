<div class="container">
    <div class="card">
        <h5 class="card-header">
            Ubah Panenku
        </h5>
        <div class="card-body">
            <form action="<?= BASEURL ?>/panenku/ubahPanenku" enctype="multipart/form-data" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama Hasil Panen</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Hasil Panen" value="<?= $data['panenku']['nama'] ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="<?= $data['panenku']['id_kategori'] ?>"><?= $data['panenku']['kategori'] ?></option>
                            <option value="1">Sayuran</option>
                            <option value="2">Buah-Buahan</option>
                            <option value="3">Beras dan Biji-Bijian</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?= $data['panenku']['deskripsi'] ?>" required>
                </div>
                <div class=" form-row">
                    <div class="form-group col-md-4">
                        <label for="deskripsi">Harga (Rupiah/Kilogram)</label>
                        <input type="number" class="form-control" name="harga" placeholder="harga" value="<?= $data['panenku']['harga'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="deskripsi">Jumlah (Kilogram)</label>
                        <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="<?= $data['panenku']['jumlah'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="deskripsi">Sisa (Kilogram)</label>
                        <input type="number" class="form-control" name="sisa" placeholder="sisa" value="<?= $data['panenku']['sisa'] ?>" required>
                    </div>
                </div>
                <div>
                    <label> Foto </label>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto1']; ?>" alt="" width="100%" height="100%">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto1">Pilih foto</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto2']; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto2" name="foto2" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto2">Pilih foto</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto3']; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto3" name="foto3" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto3">Pilih foto</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto4']; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto4" name="foto4" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto4">Pilih foto</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto5']; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto5" name="foto5" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto5">Pilih foto</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3" style="width: 100%; height: 250px; background-image: url(<?= BASEURL ?>/assets/img/icon/noimage.jpg); background-size: 100% 250px">
                            <img src="<?= BASEURL ?>/app/models/barang/<?= $data['panenku']['foto6']; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto6" name="foto6" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto6">Pilih foto</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>