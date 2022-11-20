<?php

namespace BasicPhpPzn\PhpMvc\Controller;


use BasicPhpPzn\PhpMvc\App\Controller;
use BasicPhpPzn\PhpMvc\Helper\Flasher;
use const BasicPhpPzn\PhpMvc\Config\BASEURL;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['title'] = "PHP MVC - Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa')->getMahasiswa();
        // var_dump($data['mhs']);

        $this->view('templates/header', $data);
        $this->view('Mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail ($nim)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa')->getMhsbyNim($nim);	
		$this->view('templates/header', $data); 
		$this->view('Mahasiswa/detail', $data);
		$this->view('templates/footer');
	}


	public function tambah () 
	{
		if( $this->model('Mahasiswa')->tambahDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}


	public function hapus ($nim) 
	{
		if( $this->model('Mahasiswa')->hapusDataMhs($nim) > 0 ){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}


	public function getEdit ()
	{
		echo json_encode($this->model('Mahasiswa')->getMhsbyNim($_POST['nim']));
	}

	public function update () 
	{
		if( $this->model('Mahasiswa')->updateDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}

	public function cari ()
	{
		$data['mhs'] = $this->model('Mahasiswa')->cariDataMhs();	
		$this->view('Mahasiswa/livesearch', $data);
	}
}