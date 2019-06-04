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
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle" href="#" id="akun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black"><?= $data['user']['nama'] ?></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="akun">
						<a class="dropdown-item" href="#">Profil</a>
						<a class="dropdown-item" href="#">Pengaturan</a>
						<a class="dropdown-item" href="<?= BASEURL ?>/user/keluar" onclick="return confirm('Anda yakin ingin keluar ?');">Keluar</a>
					</div>
				</li>
			</ul>
		</div>
	</header>