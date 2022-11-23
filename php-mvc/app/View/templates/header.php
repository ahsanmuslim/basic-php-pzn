<?php
use const BasicPhpPzn\PhpMvc\Config\BASEURL;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['title'] ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
		<div class="container">
			<a class="navbar-brand" href="/">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= BASEURL ?>/about">About Me</a>
					</li>
				</ul>
			</div>

			<div class="navbar-nav">
				<img class="mr-2" src="https://pro.propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Ahmad Susanto
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= BASEURL ?>/logout">Logout</a>
					</div>
				</li>
			</div>
		</div>
		
		
		
	</nav>
