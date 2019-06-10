<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/assets/css/bootstrap.css">
	<link rel="shortcut icon" href="<?= BASEURL ?>/assets/img/logo/logo-manen.in.jpg">

</head>

<body>
	<header class="navbar navbar-expand-md navbar-dark fixed-top bg-white border-bottom shadow-sm">
		<h5 class="p-2 font-weight-normal"><a href="<?= BASEURL ?>" class="nav-link">Manenin</a></h5>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
			<span>
				<img class="btn btn-light" src="<?= BASEURL ?>/assets/img/icon/icons8_menu_filled_30px.png" alt="">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbars">
			<form id="cari" action="<?= BASEURL ?>/kategori/cari" class="input-group p-2" method="POST">
				<input type="text" name="cari" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="cari" aria-describedby="cari" required>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
				</div>
			</form>
			<ul class="nav nav-pills navbar-nav p-2">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:black">Kategori</a>
					<div class="dropdown-menu dropdown-menu-right mt-3" aria-labelledby="kategori">
						<a class="dropdown-item" href="<?= BASEURL ?>/kategori/sayuran">Sayuran</a>
						<a class="dropdown-item" href="<?= BASEURL ?>/kategori/buah_buahan">Buah-Buahan</a>
						<a class="dropdown-item" href="<?= BASEURL ?>/kategori/beras_dan_biji_bijian">Beras dan Biji-Bijian</a>
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
						<a class="btn-link" href="<?= BASEURL ?>/home/pendaftaran">Tidak Punya Akun?</a>
						<a class="btn-link float-right" href="" data-toggle="modal" data-target="#formLupa" data-dismiss="modal">Lupa Password?</a>
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary btn-block">Masuk</button>
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
						<button type="submit" class="btn btn-primary btn-block">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>