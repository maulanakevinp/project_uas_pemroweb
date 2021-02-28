<div class="container">
    <div class="card">
        <h5 class="card-header">
            Tambah Panenku
        </h5>
        <ul class="list-group list-group-flush">
            <form action="<?= BASEURL ?>panenku/tambahPanenku" enctype="multipart/form-data" method="post">
                <li class="list-group-item">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Hasil Panen</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Hasil Panen" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="1">Sayuran</option>
                                <option value="2">Buah-Buahan</option>
                                <option value="3">Beras dan Biji-Bijian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Harga (Rupiah/Kilogram)</label>
                            <input type="number" class="form-control" name="harga" placeholder="harga" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Stok (Kilogram)</label>
                            <input type="number" class="form-control" name="stok" placeholder="stok" required>
                        </div>
                    </div>
                    <div>
                        <label> Foto </label>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="foto1" required>
                                <label class="custom-file-label" for="foto1">Pilih foto</label>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto2" name="foto2" aria-describedby="foto2">
                                <label class="custom-file-label" for="foto2">Pilih foto</label>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto3" name="foto3" aria-describedby="foto3">
                                <label class="custom-file-label" for="foto3">Pilih foto</label>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto4" name="foto4" aria-describedby="foto4">
                                <label class="custom-file-label" for="foto4">Pilih foto</label>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto5" name="foto5" aria-describedby="foto5">
                                <label class="custom-file-label" for="foto5">Pilih foto</label>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto6" name="foto6" aria-describedby="foto6">
                                <label class="custom-file-label" for="foto6">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </li>
            </form>
        </ul>
    </div>
</div>