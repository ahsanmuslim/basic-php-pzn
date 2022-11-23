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


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container mt-2 ml-15">
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
	</div>
	</nav>

    <div class="container mt-4">
        <div class="error-box">
            <div class="error-body text-center p-4">
                <h3><strong>HTTP ERROR 404</strong></h3>
                <h5><small>No webpage was found for the web address: <b><?= $data['link'] ?></b></small></h5><br>
                <a href="/" class="btn btn-primary">Back to home</a> 
            </div>
        </div>
    </div>

<script src="<?= BASEURL ?>/js/jquery-3.3.1.js"></script>

<script src="<?= BASEURL ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL ?>/js/script.js"></script>

</body>
</html>