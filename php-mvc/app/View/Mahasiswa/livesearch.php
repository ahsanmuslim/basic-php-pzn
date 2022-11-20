<?php foreach ($data['mhs'] as $mhs) :?>
    <li class="list-group-item">
        <?= $mhs['nama']; ?>						
        <a href="mahasiswa/<?= $mhs['nim']; ?>" class="btn btn-primary btn-sm float-right ml-1" >detail</a>
        <a href="mahasiswa/<?= $mhs['nim']; ?>" class="btn btn-success btn-sm float-right ml-1 tampilModalEdit" data-toggle="modal" data-target="#modalMhs" data-nim="<?= $mhs['nim']; ?>">edit</a>
        <form action="mahasiswa/<?= $mhs['nim']; ?>" method="POST" class="d-inline">
            <input type="hidden" value="DELETE" name="_method">
            <input type="submit" value="delete" class="btn btn-danger btn-sm float-right ml-1" onClick="return confirm('Apakah Anda yakin akan menghapus data ini ?');" value="hapus" name="hapus">
        </form>
    </li>
<?php endforeach; ?>