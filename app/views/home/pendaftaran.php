<div class="container">
    <div class="card">
        <h5 class="card-header">Pendaftaran</h5>
        <div class="card-body">
            <form id="form" action="<?= BASEURL ?>home/daftar" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Maulana Kevin Pradana" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">username</label>
                        <input type="username" class="form-control" id="username" name="username" placeholder="maulanakevinp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="maulanakevinp@gmail.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cpassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="089789678567" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. PB Sudirman No. 1" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="foto" name="foto" aria-describedby="foto" required>
                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="cover" name="cover" aria-describedby="cover" required>
                            <label class="custom-file-label" for="cover">Pilih Cover</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Daftar</button>
            </form>
        </div>
    </div>
</div>