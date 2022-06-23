<?php

namespace App\Controllers;

class Pesertadidik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Peserta Didik',
        ];
        return view('pesertadidik/v_beranda', $data);
    }
}
