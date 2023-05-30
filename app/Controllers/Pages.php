<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua' , 'tiga']
        ];
        echo view ('layout/header', $data);
       echo view('pages/home');
       echo view ('layout/footer');
    }


    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        echo view ('layout/header', $data);
        echo view ('pages/about');
        echo view ('layout/footer');
    }

    public function event()
    {
        $data = [
            'title' => 'Event'
        ];
        echo view ('layout/header', $data);
        echo view('pages/event');
        echo view ('layout/footer');
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        echo view ('layout/header', $data);
        echo view('pages/register');
        echo view ('layout/footer');
    }

}