<div class="container">
    <div class="card">
        <h5 class="card-header">
            Tambah Panenku
        </h5>
        <div class="card-body">
            <form action="<?= BASEURL ?>/panenku/tambahPanenku" enctype="multipart/form-data" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama Hasil Panen</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Hasil Panen">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="1">Sayuran</option>
                            <option value="2">Buah-Buahan</option>
                            <option value="3">Beras dan Biji-Bijian</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                </div>
                <div>
                    <label> Foto </label>
                </div>
                <div class="form-row">
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto1">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto2" name="foto2" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto2">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto3" name="foto3" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto3">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto4" name="foto4" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto4">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto5" name="foto5" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto5">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto6" name="foto6" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto6">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto7" name="foto7" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto7">Pilih foto</label>
                        </div>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto8" name="foto8" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="foto8">Pilih foto</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>