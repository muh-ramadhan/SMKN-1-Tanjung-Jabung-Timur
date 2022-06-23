<?php

namespace App\Controllers;

class Tatausaha extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Tata Usaha',
        ];
        return view('tatausaha/beranda', $data);
    }
}
