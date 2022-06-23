<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Guru',
        ];
        return view('guru/beranda', $data);
    }
}
