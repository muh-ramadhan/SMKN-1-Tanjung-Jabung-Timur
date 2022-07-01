<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PesertaDidikModel;
use App\Models\JalurMasukModel;
use App\Models\JurusanModel;
use App\Models\TahunAjaranModel;

class Register extends BaseController
{
    public function __construct()
    {
        helper(['form', 'date', 'inflector', 'text']);
        $this->LoginModel = new LoginModel();
        $this->PesertaDidikModel = new PesertaDidikModel();
        $this->JalurMasukModel = new JalurMasukModel();
        $this->JurusanModel = new JurusanModel();
        $this->TahunAjaranModel = new TahunAjaranModel();
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB',
            'subtitle' => 'Pendaftaran',
            'StatusTahunAjaran'         => $this->TahunAjaranModel->where('status', '1')->get()->getRowArray(),
            'AmbilSemuaDataJalurMasuk'  => $this->JalurMasukModel->orderBy('id_jalur_masuk', 'ASC')->get()->getResultArray(),
            'AmbilSemuaDataJurusan'     => $this->JurusanModel->orderBy('id_jurusan', 'ASC')->get()->getResultArray(),
            'validation' =>  \Config\Services::validation(),
        ];
        return view('v_register', $data);
    }

    public function auth()
    {
        if ($this->validate(
            [
                'id_jalur_masuk'    => [
                    'label' => 'Jalur Masuk',
                    'rules'  => 'required|numeric',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'numeric' => '{field} Hanya boleh berisi angka'
                    ]
                ],
                'id_jurusan'    => [
                    'label' => 'Jurusan',
                    'rules'  => 'required|numeric',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'numeric' => '{field} Hanya boleh berisi angka',
                    ]
                ],
                'nisn' => [
                    'label' => 'NISN',
                    'rules'  => 'required|min_length[10]|max_length[10]|numeric|is_unique[tbl_pesertadidik.nisn]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'min_length' => '{field} Minimal 10 karakter',
                        'max_length' => '{field} Maximal 10 karakter',
                        'numeric' => '{field} Hanya boleh berisi angka',
                        'is_unique' => '{field} Ini sudah terdaftar'
                    ]
                ],
                'nama_lengkap_pesertadidik'    => [
                    'label' => 'Nama Lengkap',
                    'rules'  => 'required|alpha_space|min_length[3]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'alpha_space' => '{field} Hanya boleh berisi alfabet dan spasi',
                        'min_length' => '{field} Minimal 3 karakter',
                    ]
                ],
                'jenis_kelamin'    => [
                    'label' => 'Jenis Kelamin',
                    'rules'  => 'required|in_list[L,P]|min_length[1]|max_length[1]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'in_list' => '{field} Anda Laki-Laki atau Perempuan?',
                        'min_length' => '{field} Minimal 1 krakter',
                        'max_length' => '{field} Minimal 1 karakter',
                    ]
                ],
                'tempat_lahir_pesertadidik'    => [
                    'label' => 'Tempat Lahir',
                    'rules'  => 'required|alpha_space|min_length[3]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'alpha_space' => '{field} Hanya boleh berisi alfabet dan spasi',
                        'min_length' => '{field} Minimal 3 karakter',
                    ]
                ],
                'tanggal'    => [
                    'label' => 'Tanggal',
                    'rules'  => 'required|numeric|max_length[2]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'numeric' => '{field} Hanya boleh berisi angka',
                        'max_length' => '{field} Minimal 2 karakter',
                    ]
                ],
                'bulan'    => [
                    'label' => 'Bulan',
                    'rules'  => 'required|numeric|max_length[2]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'numeric' => '{field} Hanya boleh berisi angka',
                        'max_length' => '{field} Minimal 2 karakter',
                    ]
                ],
                'tahun'    => [
                    'label' => 'Tahun',
                    'rules'  => 'required|numeric|min_length[4]|max_length[4]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'numeric' => '{field} Hanya boleh berisi angka',
                        'min_length' => '{field} Minimal 4 krakter',
                        'max_length' => '{field} Minimal 4 karakter',
                    ]
                ],
            ]
        )) {
            //Jika validasi berhasil dilewati maka simpan data
            $tahunajaran = $this->TahunAjaranModel->where('status', '1')->get()->getRowArray();
            $tahun = $this->request->getPost('tahun');
            $bulan = $this->request->getPost('bulan');
            $tanggal = $this->request->getPost('tanggal');
            $PesertaDidikModel = new PesertaDidikModel();
            //Generate Nomor Pendaftaran
            $no_pendaftaran = $this->PesertaDidikModel
            ->select('RIGHT(no_pendaftaran,4) as no_pendaftaran', false)
			->select('LEFT(no_pendaftaran,8) as tanggal', false)
			->orderBy('no_pendaftaran', 'DESC')
			->limit(1)->get()->getRowArray();
            if (empty($no_pendaftaran['no_pendaftaran'])) { //jika tidak berfungsi gunakan empty($kode['no_pendaftaran'])
                $no = 1;
            } else {
                if ($no_pendaftaran['tanggal'] == date('Ymd')) {
                    $no = intval($no_pendaftaran['no_pendaftaran']) + 1;
                } else {
                    $no = 1;
                }
            }
    
            $tgl = date('Ymd');
            $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
            $no_pendaftaran = $tgl . $batas;
            //dd($no_pendaftaran);

            $data = [
                'no_pendaftaran' => $no_pendaftaran,
                'tahun_pendaftaran' => $tahunajaran['tahun'],
                'tanggal_pendaftaran' => date('Y-m-d'),
                'id_jalur_masuk' => $this->request->getPost('id_jalur_masuk'),
                'id_jurusan' => $this->request->getPost('id_jurusan'),
                'nisn' => $this->request->getPost('nisn'),
                'nama_lengkap_pesertadidik' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_lengkap_pesertadidik'))), ' ', true),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'tempat_lahir_pesertadidik' => reduce_multiples(ucwords(strtolower($this->request->getPost('tempat_lahir_pesertadidik'))), ' ', true),
                'tanggal_lahir_peserta_didik' => $tahun . '-' . $bulan . '-' . $tanggal,
            ];
            $PesertaDidikModel->insert($data);
            $last_insert_id = $PesertaDidikModel->getInsertID();
            $data = [
                'id_pesertadidik' => $last_insert_id,
                'id_guru' => NULL,
                'nama_pengguna' => $this->request->getPost('nisn'),
                'kata_sandi' => date('dmY', strtotime($tahun . '-' . $bulan . '-' . $tanggal)),
                'level' => 5,
            ];
            $LoginModel = new LoginModel();
            $LoginModel->insert($data);
            session()->setFlashdata('pesan', 'Anda berhasil membuat akun, silahkan login untuk melengkapi biodata anda');
            return redirect()->to('/Register');
        } else {
            //jika gagal dan ada validasi
            $validation =  \Config\Services::validation();
            return redirect()->to('/Register')->withInput()->with('validation', $validation);
        }
    }
}
