<?php

namespace BasicPhpPzn\PhpMvc\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;

class AboutController extends Controller
{
    public function index ($nama = "Ahmad Susanto", $pekerjaan = "Programmer", $umur = 31)
	{
		$data['nama']		=	$nama;
		$data['pekerjaan']	=	$pekerjaan;
		$data['umur']		=	$umur;
		

		$data['title'] = 'PHP MVC - About';
		$this->view('templates/header', $data);
		$this->view('About/index', $data);
		$this->view('templates/footer');
	}

	public function page ()
	{
		$data['title'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('About/page',$data);
		$this->view('templates/footer');
	}
}