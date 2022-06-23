<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        session()->remove('log');
        session()->remove('id_login');
        session()->remove('id_pesertadidik');
        session()->remove('id_guru');
        session()->remove('nama_pengguna');
        session()->remove('kata_sandi');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Berhasil Logout');
        // Redirect Ke Routing Utama
        return redirect()->to(base_url('/'));
    }
}
