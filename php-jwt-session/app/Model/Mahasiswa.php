<?php

use BasicPhpPzn\PhpJwtSession\App\Database;

class Mahasiswa
{
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

	public function getMhsbyNim($nim)
	{
		$this->db->query ('SELECT * FROM '. $this->table . ' WHERE nim=:nim'); 
		$this->db->bind ( 'nim', $nim );
		return $this->db->single();
	}


	public function tambahDataMhs ($data): int
	{
		$query = "INSERT INTO mahasiswa	VALUES (:nim, :nama, :jurusan, :email, :alamat)";

		$this->db->query($query);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('alamat', $data['alamat']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	//Fungsi untuk cek data mahasiswa berdasarkan nim 
	public function cekMahasiswa($nim): int
	{
		$query = "SELECT nama FROM mahasiswa WHERE nim=:nim";

		$this->db->query($query);
		$this->db->bind('nim', $nim);
		$this->db->execute();
		return $this->db->rowCount();
	}

    public function hapusDataMhs ($data): int
	{
		$query = " DELETE FROM mahasiswa WHERE nim =:nim ";

		$this->db->query($query);
		$this->db->bind('nim', $data['nim']);
		$this->db->execute();

		return $this->db->rowCount();
	}


	public function updateDataMhs ($data): int
	{
		$query = "UPDATE mahasiswa SET 
					nama =:nama,
					jurusan =:jurusan,
					email =:email,
					alamat =:alamat 
					WHERE nim =:nim";

		$this->db->query($query);
		
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('alamat', $data['alamat']);

		$this->db->execute();

		return $this->db->rowCount();

	}

	public function cariDataMhs (): array
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}
}