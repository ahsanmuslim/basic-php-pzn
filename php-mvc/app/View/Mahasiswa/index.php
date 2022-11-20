<div class="container mt-3">

	<!-- <div class="row">
		<div class="col-lg-6">
			Flasher::flash()
		</div>		
	</div> -->

	<div class="row mb-3">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahMhs" data-toggle="modal" data-target="#modalMhs">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
		<form action="mahasiswa/cari" method="post">
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</div>
		</div>
		</form>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) :?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>						
						<a href="mahasiswa/<?= $mhs['nim']; ?>" class="badge badge-primary float-right ml-1" >detail</a>
						<a href="mahasiswa/<?= $mhs['nim']; ?>" class="badge badge-success float-right ml-1 tampilModalEdit" data-toggle="modal" data-target="#modalMhs" data-nim="<?= $mhs['nim']; ?>">edit</a>
						<form action="mahasiswa/<?= $mhs['nim']; ?>" method="POST">
							<input type="hidden" value="DELETE" name="_method" class="d-inline">
							<input type="submit" value="delete" class="btn btn-danger btn-sm float-right" onClick="return confirm('Apakah Anda yakin akan menghapus data ini ?');" value="hapus" name="hapus">
						</form>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>	
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalMhs" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="mahasiswa/tambah" method="post">
				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text"  name="nim" class="form-control" id="nim">
				</div>
				<div class="form-group">
					<label for="nama">Nama Mahasiswa</label>
					<input type="text" name="nama" class="form-control" id="nama">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select name="jurusan" class="form-control" id="jurusan">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Teknik Mesin">Teknik Mesin</option>
						<option value="Teknik Kimia">Teknik Kimia</option>
						<option value="Akutansi">Akutansi</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
					</select>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="contoh@gmail.com">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" class="form-control" id="alamat">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
</div>
