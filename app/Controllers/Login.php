<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        $data   = [
            'tittle'    => 'Login',
        ];
        return view('v_login', $data);
    }

    public function auth()
    {
        //Validasi Isian Form
        if ($this->validate([
            'nama_pengguna' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
            'kata_sandi' => [
                'label' => 'Kata Sandi',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            //Jika Validasi Isian Form Berhasil
            $nama_pengguna = $this->request->getPost('nama_pengguna');
            $kata_sandi = $this->request->getPost('kata_sandi');
            $cek = $this->LoginModel->where([
				'nama_pengguna'  => $nama_pengguna,
				'kata_sandi'  => $kata_sandi
			])
			->get()
			->getRowArray();;
            if ($cek) {
                //Periksa Data Jika Datanya Cocok
                session()->set('log', true);
                session()->set('id_login', $cek['id_login']);
                session()->set('id_pesertadidik', $cek['id_pesertadidik']);
                session()->set('id_guru', $cek['id_guru']);
                session()->set('nama_pengguna', $cek['nama_pengguna']);
                session()->set('kata_sandi', $cek['kata_sandi']);
                session()->set('level', $cek['level']);
                //dd($cek); //Periksa
                //Login Direct Ke Halaman Beranda
                return redirect()->to(base_url('Beranda'));
            }else{
                //Jika Periksa Gagal
                session()->setFlashdata('pesan', 'Username atau Kata Sandi Salah');
                return redirect()->to(base_url('Login'));
            }
        }else{
            //Jika Validasi Isian Form Gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Login'));
        }
    }

}
