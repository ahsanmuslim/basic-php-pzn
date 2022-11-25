<?php

namespace BasicPhpPzn\PhpJwtSession\Controller;


use BasicPhpPzn\PhpJwtSession\App\Controller;
use BasicPhpPzn\PhpJwtSession\Helper\Flasher;
use const BasicPhpPzn\PhpJwtSession\Config\BASEURL;

class MahasiswaController extends Controller
{
	private $userlogin;

	public function __construct()
	{
		$this->userlogin = $this->model('User')->getUser();
	}

    public function index()
    {
        $data['title'] = "PHP MVC - Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa')->getMahasiswa();
		$data['userlogin'] = $this->userlogin;

        $this->view('templates/header', $data);
        $this->view('Mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail ($nim)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa')->getMhsbyNim($nim);	
		$data['userlogin'] = $this->userlogin;
		$this->view('templates/header', $data); 
		$this->view('Mahasiswa/detail', $data);
		$this->view('templates/footer');
	}


	public function tambah () 
	{
		$nim = $_POST['nim'];
		var_dump($this->model('Mahasiswa')->cekMahasiswa($nim));
		if($this->model('Mahasiswa')->cekMahasiswa($nim) > 0){
			Flasher::setFlash('gagal', 'ditambahkan', 'danger','' ,'Nim sudah ada di database !');
			header ('Location: ' . BASEURL . '/mahasiswa' );
		} elseif( $this->model('Mahasiswa')->tambahDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success','' , '');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger','' ,'');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}


	public function hapus () 
	{
		if( $this->model('Mahasiswa')->hapusDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'dihapus', 'success','', '');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger', '', '');
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
			Flasher::setFlash('berhasil', 'diubah', 'success', '', '');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger', '', '');
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