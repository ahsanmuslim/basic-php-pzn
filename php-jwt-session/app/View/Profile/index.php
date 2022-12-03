<?php

use BasicPhpPzn\PhpJwtSession\Helper\Flasher;

?>

<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="col-lg-6 mt-4 m-auto">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <b>My Profile</b>
            </div>
            <div class="card-body">
                <div class="col-lg">
                    <?php Flasher::flash(); ?>
                </div>
                <p class="text-center"><img src="<?= BASEURL; ?>/img/<?= $data['userlogin']['profile']; ?>" width="200" class="rounded-circle shadow-lg mt-2 mb-4 text-center" alt="<?= $data['userlogin']['nama_user']; ?>"></p>
                <h4 class="card-title text-center"><b><?= $data['userlogin']['nama_user']; ?> </b> ( <?= $data['userlogin']['username']; ?> ) </h4>
                <hr>
                <p class="card-text mt-3 ml-5"><i class="fas fa-envelope mr-4"></i><?= $data['userlogin']['email']; ?></p>
                <p class="card-text ml-5"><i class="fas fa-phone mr-4"></i><?= $data['userlogin']['no_telp']; ?></p>
                <p class="card-text ml-5"><i class="fas fa-clock mr-4"></i><?= 'Registered since - ' . date('d F Y', strtotime($data['userlogin']['tgl_register'])) ?></p>
                <hr>

                <div class="d-flex justify-content-center">
                    <p class="text-center d-inline-block mx-3"><a href="<?= BASEURL; ?>/profile/macaddress" class="btn btn-warning mt-3">Mac Address</a></p>
                    <p class="text-center d-inline-block mx-3"><a href="<?= BASEURL; ?>/profile/edit" class="btn btn-primary mt-3">Edit Profile</a></p>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

