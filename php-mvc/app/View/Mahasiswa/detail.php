<div class ="container mt-5">
    <div class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['alamat']; ?></p>
            <a href="/mahasiswa" class="badge badge-primary">kembali</a>
        </div>
    </div>
</div>

