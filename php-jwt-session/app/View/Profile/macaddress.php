<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="col-lg-6 mt-4 m-auto">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <b>Device Information</b>
            </div>
            <div class="card-body">
                <hr>
                    <p class="card-text mt-3 ml-5">Hex   : <?= $data['mac']['result'][0]['hex'] ?></p>
                    <p class="card-text mt-3 ml-5">B16 : <?= $data['mac']['result'][0]['b16'] ?></p>
                    <p class="card-text mt-3 ml-5">Brand  : <?= $data['mac']['result'][0]['name'] ?></p>
                    <p class="card-text mt-3 ml-5">Device Name : <?= $data['mac']['result'][0]['address'] ?></p>
                <hr>
                    <p class="card-text mt-3 ml-5">Your IP Address : <?= $data['ip'] ?></p>
                <hr>
                    <p class="card-text mt-3 ml-5">Your Host IP : <?= $data['host'] ?></p>
                <hr>
                    <p class="card-text mt-3 ml-5">Your Location : <?= var_dump($data['location']) ?></p>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

