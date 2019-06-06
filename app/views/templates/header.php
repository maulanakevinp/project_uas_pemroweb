<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/assets/css/bootstrap.css">
	<link rel="shortcut icon" href="<?= BASEURL ?>/assets/img/logo/logo-manen.in.jpg">

</head>

<body>
	<header class="navbar navbar-expand-md navbar-dark fixed-top bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?= BASEURL ?>" class="nav-link">Manenin</a></h5>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
			<span>
				<img class="btn btn-light" src="<?= BASEURL ?>/assets/img/icon/icons8_menu_filled_30px.png" alt="">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbars">
			<div class="input-group mr-3 ml-3">
				<input type="text" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="Cari Buah-buahan atau Sayuran" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
				</div>
			</div>
			<ul class="nav nav-pills mr-1 ml-1">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategori</a>
					<div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="kategori">
						<a class="dropdown-item" href="#">Sayuran</a>
						<a class="dropdown-item" href="#">Buah-Buahan</a>
						<a class="dropdown-item" href="#">Beras dan Biji-Bijian</a>
					</div>
				</li>
			</ul>
			<?php Flasher::header() ?>

		</div>
	</header>

	<div class="container" style="margin-top: 100px;">
		<?php Flasher::flash() ?>
	</div>

	<!-- Modal Masuk -->
	<div class="modal fade" id="formMasuk" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="form" action="<?= BASEURL; ?>/home/masuk" method="POST">

					<div class="modal-header">
						<h5 class="modal-title">Masuk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label for="email">Email atau Username</label>
							<input type="text" class="form-control" id="email-username" name="email-username" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<a class="btn-link" href="" data-toggle="modal" data-target="#formDaftar" data-dismiss="modal">Tidak Punya Akun?</a>
						<a class="btn-link float-right" href="" data-toggle="modal" data-target="#formLupa" data-dismiss="modal">Lupa Password?</a>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Daftar-->
	<div class="modal fade" id="formDaftar" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="form" action="<?= BASEURL ?>/home/daftar" method="POST">
					<div class="modal-header">
						<h5 class="modal-title">Daftar</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="emaild" name="emaild" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="passwordd" name="passwordd" required>
						</div>
						<div class="form-group">
							<label for="cpassword">Konfirmasi Password</label>
							<input type="password" class="form-control" id="cpassword" name="cpassword" required>
						</div>
						<a class="btn-link" href="" data-toggle="modal" data-target="#formMasuk" data-dismiss="modal">Sudah Punya Akun?</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal lupa -->
	<div class="modal fade" id="formLupa" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="form" action="<?= BASEURL; ?>/home/lupa" method="POST">

					<div class="modal-header">
						<h5 class="modal-title">Lupa Pasword</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="emaill" name="emaill">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>