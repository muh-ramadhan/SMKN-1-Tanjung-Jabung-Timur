<?php

namespace App\Controllers;

class Adminstrator extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Administrator',
        ];
        return view('administrator/beranda', $data);
    }
}
