<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Beranda extends BaseController
{
    public function index()
    {
        //Jika Filter Gagal
        //Paksa Direct Ke Beranda Masing-Masing Level
        if (session()->get('level') == 1) {
            return redirect()->to(base_url('Superadmin'));
        } else if (session()->get('level') == 2) {
            return redirect()->to(base_url('Administrator'));
        } else if (session()->get('level') == 3) {
            return redirect()->to(base_url('Guru'));
        } else if (session()->get('level') == 4) {
            return redirect()->to(base_url('Tatausaha'));
        } else if (session()->get('level') == 5) {
            return redirect()->to(base_url('Pesertadidik'));
        } else {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to(base_url('Login'));
        }
    }
}
