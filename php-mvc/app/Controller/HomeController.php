<?php

namespace BasicPhpPzn\PhpMvc\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = $this->model('User')->getUser();
        $data['title'] = "PHP MVC - Home";
        $data['content'] = "Sebaik - baik manusia adalah yang paling bermanfaat untuk manusia lainnya. Untuk itu jadilah layaknya sebuah pohon yang akarnya menghujam ke tanah, batangnya kuat menjulang ke langit & daunnya rindang meneduhkan serta berbuah yang bisa dinikmati untuk makhluq lainnya.";

        $this->view('templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('templates/footer');
    }

    public function notfound()
    {
        $data['title'] = 'PHP MVC - Page Not Found';
        $data['link'] = 'http://' . $_SERVER['HTTP_HOST'] .''. $_SERVER['REQUEST_URI'];
        header("HTTP/1.1 404 Not Found");
        $this->view('notfound', $data);
    }
}