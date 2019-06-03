<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="shortcut icon" href="<?= BASEURL ?>/img/logo/logo-manen.in.jpg">

</head>

<body>
	<header class="navbar navbar-expand-md navbar-dark fixed-top bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?= BASEURL ?>" class="nav-link">Manenin</a></h5>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
			<span>
				<img class="btn btn-light" src="<?= BASEURL ?>/img/icon/icons8_menu_filled_30px.png" alt="">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbars">
			<div class="input-group mr-3 ml-3">
				<input type="text" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="Cari Buah-buahan atau Sayuran" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
				</div>
			</div>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">Kategori</a>
					<div class="dropdown-menu" aria-labelledby="kategori">
						<a class="dropdown-item" href="#">Sektor Pertanian</a>
						<a class="dropdown-item" href="#">Sektor Perkebunan</a>
						<a class="dropdown-item" href="#">Sektor Tanaman</a>
					</div>
				</li>
			</ul>
			<a class="nav-link" href="">
				<img src="<?= BASEURL ?>/img/icon/icons8_shopping_basket_2_50px.png" alt="">
			</a>
			<a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#formMasuk">Masuk</a>
		</div>
	</header>

	<!-- Modal Masuk -->
	<div class="modal fade" id="formMasuk" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="form" action="<?= BASEURL; ?>/user/masuk" method="POST">

					<div class="modal-header">
						<h5 class="modal-title">Masuk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password">
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
				<form id="form" action="<?= BASEURL ?>/daftar" method="POST">
					<div class="modal-header">
						<h5 class="modal-title">Daftar</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="emaild" name="emaild">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="passwordd" name="passwordd">
						</div>
						<div class="form-group">
							<label for="cpassword">Konfirmasi Password</label>
							<input type="password" class="form-control" id="cpassword" name="cpassword">
						</div>
						<a class="btn-link" href="" data-toggle="modal" data-target="#formMasuk" data-dismiss="modal">Sudah Punya Akun?</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal lupa -->
	<div class="modal fade" id="formLupa" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="form" action="<?= BASEURL; ?>/lupa" method="POST">

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