<?php
use BasicPhpPzn\PhpJwtSession\Helper\Access;

$akses = new Access();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['title'] ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="shortcut icon" href="<?= BASEURL ?>/img/icon.png" type="image/x-icon">
	<link href="<?= BASEURL ?>/vendor/fortawesome/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= BASEURL; ?>/css/font-google.min.css" rel="stylesheet" type="text/css">
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
		<div class="container">
			<a class="navbar-brand" href="<?= BASEURL ?>/home">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<?php if($akses->MenuAccessCheck('home', $data['userlogin']['role'])){ ?>
						<li class="nav-item active">
							<a class="nav-link" href="<?= BASEURL ?>/home">Home <span class="sr-only">(current)</span></a>
						</li>
					<?php }  ?>
					<?php if($akses->MenuAccessCheck('mahasiswa', $data['userlogin']['role'])){ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
						</li>
					<?php } ?>
					<?php if($akses->MenuAccessCheck('about', $data['userlogin']['role'])){ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= BASEURL ?>/about">About Me</a>
						</li>
					<?php }  ?>
				</ul>
			</div>

			<div class="navbar-nav">
				<img class="mr-2 rounded-circle" src="<?= BASEURL ?>/img/<?= $data['userlogin']['profile']; ?>" width="40" height="40" alt="avatar">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $data['userlogin']['nama_user'] ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= BASEURL ?>/profile">My Profile</a>
						<a class="dropdown-item" href="<?= BASEURL ?>/logout">Logout</a>
					</div>
				</li>
			</div>
		</div>
	</nav>
