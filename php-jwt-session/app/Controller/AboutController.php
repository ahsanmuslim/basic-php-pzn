<?php

namespace BasicPhpPzn\PhpJwtSession\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;

class AboutController extends Controller
{
	private $userlogin;

	public function __construct()
	{
		$this->userlogin = $this->model('User')->getUser();
	}

    public function index ($nama = "Ahmad Susanto", $pekerjaan = "Programmer", $umur = 31)
	{
		$data['nama']		=	$nama;
		$data['pekerjaan']	=	$pekerjaan;
		$data['umur']		=	$umur;
		

		$data['title'] = 'PHP MVC - About';
		$data['userlogin'] = $this->userlogin;
		$this->view('templates/header', $data);
		$this->view('About/index', $data);
		$this->view('templates/footer');
	}
}