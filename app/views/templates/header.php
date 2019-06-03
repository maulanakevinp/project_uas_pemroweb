<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
</head>

<body>
	<header class="navbar navbar-expand-md navbar-dark fixed-top bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">Manenin</h5>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbars">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle ml-3 mt-1" href="#" id="kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">Kategori</a>
					<div class="dropdown-menu" aria-labelledby="kategori">
						<a class="dropdown-item" href="#">Sektor Pertanian</a>
						<a class="dropdown-item" href="#">Sektor Perkebunan</a>
						<a class="dropdown-item" href="#">Sektor Tanaman</a>
					</div>
				</li>
			</ul>
			<div class="input-group mr-3 ml-3">
				<input type="text" class="form-control" placeholder="Cari Buah-buahan atau Sayuran" aria-label="Cari Buah-buahan atau Sayuran" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
				</div>
			</div>

			<div class="btn-group ">
				<a class="btn btn-outline-success" href="#">Masuk</a>
				<a class="btn btn-outline-primary" href="#">Daftar</a>
			</div>
		</div>
	</header>