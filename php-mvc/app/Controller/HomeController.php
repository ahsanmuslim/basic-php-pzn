<?php

namespace BasicPhpPzn\PhpMvc\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "PHP MVC - Home",
            "content" => "Sebaik - baik manusia adalah yang paling bermanfaat untuk manusia lainnya. Untuk itu jadilah layaknya sebuah pohon yang akarnya menghujam ke tanah, batangnya kuat menjulang ke langit & daunnya rindang meneduhkan serta berbuah yang bisa dinikmati untuk makhluq lainnya."
        ];
        $data['nama'] = $this->model('User')->getUser();

        $this->view('templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('templates/footer');
    }
}