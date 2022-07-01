<?php

namespace App\Controllers;

use App\Models\ModelSuperadmin;
use App\Models\AgamaModel;
use App\Models\GuruModel;
use App\Models\JalurMasukModel;
use App\Models\JurusanModel;
use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\LoginModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\PesertaDidikModel;
use App\Models\ProvinsiModel;
use App\Models\TahunAjaranModel;
use App\Models\PembayaranModel;
use App\Models\KelasModel;
use App\Models\MataPelajaranModel;

class Superadmin extends BaseController
{
    public function __construct()
    {
        $this->ModelSuperadmin = new ModelSuperadmin();
        $this->AgamaModel = new AgamaModel();
        $this->GuruModel = new GuruModel();
        $this->JalurMasukModel = new JalurMasukModel();
        $this->JurusanModel = new JurusanModel();
        $this->KabupatenModel = new KabupatenModel();
        $this->KecamatanModel = new KecamatanModel();
        $this->LoginModel = new LoginModel();
        $this->PekerjaanModel = new PekerjaanModel();
        $this->PendidikanModel = new PendidikanModel();
        $this->PenghasilanModel = new PenghasilanModel();
        $this->PesertaDidikModel = new PesertaDidikModel();
        $this->ProvinsiModel = new ProvinsiModel();
        $this->TahunAjaranModel = new TahunAjaranModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->KelasModel = new KelasModel();
        helper(['form', 'date', 'inflector', 'text']);
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Superadmin',
        ];
        return view('superadmin/v_beranda', $data);
    }

    // MASTER DATA PESERTA DIDIK
    public function Pesertadidik()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Peserta Didik',
            //Tampil Semua Data Kecuali Data deleted_at
            'AmbilSemuaDataPesertaDidik' => $this->PesertaDidikModel->findAll(),
            //Tampil Semua Data deleted_at
            //'AmbilSemuaDataPesertaDidik' => $this->PesertaDidikModel->onlyDeleted()->findAll(),
            //Tampil Semua Data dan Data deleted_at
            //'AmbilSemuaDataPesertaDidik' => $this->PesertaDidikModel->withDeleted()->findAll(),
        ];
        return view('superadmin/v_pesertadidik', $data);
    }

    public function TambahDataPesertaDidik()
    {
        $data = [
            'nama_lengkap_pesertadidik' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_lengkap_pesertadidik'))), ' ', true),
        ];
        $this->PesertaDidikModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pesertadidik');
    }

    public function UbahDataPesertaDidik($id_pesertadidik)
    {
        $data = [
            'id_pesertadidik' => $id_pesertadidik,
            'nama_lengkap_pesertadidik' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_lengkap_pesertadidik'))), ' ', true),
        ];
        $this->PesertaDidikModel->where('id_pesertadidik', $data['id_pesertadidik'])->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/pesertadidik');
    }

    public function HapusDataPesertaDidik($id_pesertadidik)
    {
        $data = [
            'id_pesertadidik' => $id_pesertadidik,
        ];
        $this->PesertaDidikModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/pesertadidik');
    }

    // MASTER DATA JURUSAN
    public function Jurusan()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Jurusan',
            'AmbilSemuaDataJurusan' => $this->JurusanModel->findAll(),
        ];
        return view('superadmin/v_jurusan', $data);
    }

    public function TambahDataJurusan()
    {
        $data = [
            'nama_jurusan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_jurusan'))), ' ', true),
        ];
        $this->JurusanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/jurusan');
    }

    public function UbahDataJurusan($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
            'nama_jurusan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_jurusan'))), ' ', true),
        ];
        $this->JurusanModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/jurusan');
    }

    public function HapusDataJurusan($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
        ];
        $this->JurusanModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/jurusan');
    }

    // MASTER DATA PEKERJAAN
    public function Pekerjaan()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Pekerjaan',
            'AmbilSemuaDataPekerjaan' => $this->PekerjaanModel->findAll(),
        ];
        return view('superadmin/v_pekerjaan', $data);
    }

    public function TambahDataPekerjaan()
    {
        $data = [
            'nama_pekerjaan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pekerjaan'))), ' ', true),
        ];
        $this->PekerjaanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pekerjaan');
    }

    public function UbahDataPekerjaan($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'nama_pekerjaan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pekerjaan'))), ' ', true),
        ];
        $this->PekerjaanModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/pekerjaan');
    }

    public function HapusDataPekerjaan($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
        ];
        $this->PekerjaanModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/pekerjaan');
    }

    // MASTER DATA PENDIDIKAN
    public function Pendidikan()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Pendidikan',
            'AmbilSemuaDataPendidikan' => $this->PendidikanModel->findAll(),
        ];
        return view('superadmin/v_pendidikan', $data);
    }

    public function TambahDataPendidikan()
    {
        $data = [
            'nama_pendidikan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pendidikan'))), ' ', true),
        ];
        $this->PendidikanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pendidikan');
    }

    public function UbahDataPendidikan($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'nama_pendidikan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pendidikan'))), ' ', true),
        ];
        $this->PendidikanModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/pendidikan');
    }

    public function HapusDataPendidikan($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
        ];
        $this->PendidikanModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/pendidikan');
    }

    // MASTER DATA PENGHASILAN
    public function Penghasilan()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Penghasilan',
            'AmbilSemuaDataPenghasilan' => $this->PenghasilanModel->findAll(),
        ];
        return view('superadmin/v_penghasilan', $data);
    }

    public function TambahDataPenghasilan()
    {
        $data = [
            'nama_penghasilan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_penghasilan'))), ' ', true),
        ];
        $this->PenghasilanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/penghasilan');
    }

    public function UbahDataPenghasilan($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
            'nama_penghasilan' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_penghasilan'))), ' ', true),
        ];
        $this->PenghasilanModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/penghasilan');
    }

    public function HapusDataPenghasilan($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
        ];
        $this->PenghasilanModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/penghasilan');
    }

    // MASTER DATA AGAMA
    public function Agama()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Agama',
            'AmbilSemuaDataAgama' => $this->AgamaModel->findAll(),
        ];
        return view('superadmin/v_agama', $data);
    }

    public function TambahDataAgama()
    {
        $data = [
            'nama_agama' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_agama'))), ' ', true),
        ];
        $this->AgamaModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/agama');
    }

    public function UbahDataAgama($id_agama)
    {
        $data = [
            'id_agama' => $id_agama,
            'nama_agama' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_agama'))), ' ', true),
        ];
        $this->AgamaModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/agama');
    }

    public function HapusDataAgama($id_agama)
    {
        $data = [
            'id_agama' => $id_agama,
        ];
        $this->AgamaModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/agama');
    }

    // MASTER DATA PEMBAYARAN
    public function Pembayaran()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Pembayaran',
            'AmbilSemuaDataPembayaran' => $this->PembayaranModel->findAll(),
        ];
        return view('superadmin/v_pembayaran', $data);
    }

    public function TambahDataPembayaran()
    {
        $data = [
            'nama_pembayaran' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pembayaran'))), ' ', true),
        ];
        $this->PembayaranModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pembayaran');
    }

    public function UbahDataPembayaran($id_pembayaran)
    {
        $data = [
            'id_pembayaran' => $id_pembayaran,
            'nama_pembayaran' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_pembayaran'))), ' ', true),
        ];
        $this->PembayaranModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/pembayaran');
    }

    public function HapusDataPembayaran($id_pembayaran)
    {
        $data = [
            'id_pembayaran' => $id_pembayaran,
        ];
        $this->PembayaranModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/pembayaran');
    }

    // MASTER DATA GURU
    public function Guru()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Guru',
            'AmbilSemuaDataGuru' => $this->GuruModel->findAll(),
            'validation' =>  \Config\Services::validation(), //Untuk Validasi
        ];
        return view('superadmin/v_guru', $data);
    }

    public function TambahDataGuru()
    {
        if ($this->validate(
            [
                'nama_lengkap_guru'    => [
                    'label' => 'Nama Lengkap',
                    'rules'  => 'required|min_length[3]',
                    'errors' => [
                        'required' => '{field} Wajib diisi',
                        'min_length' => '{field} Minimal 3 karakter',
                    ]
                ],
            ]
        )) {
            $data = [
                'rfid' => $this->request->getPost('rfid'),
                'nama_lengkap_guru' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_lengkap_guru'))), ' ', true),
                'nip_guru' => $this->request->getPost('nip_guru'),
                'nuptk_guru' => $this->request->getPost('nuptk_guru'),
                'id_kelas' => $this->request->getPost('id_kelas'),
                'id_matapelajaran' => $this->request->getPost('id_matapelajaran'),
                'jenis_kelamin_guru' => $this->request->getPost('jenis_kelamin_guru'),
            ];
            $this->GuruModel->insert($data);
            session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
            return redirect()->to('Superadmin/guru');
        } else {
            //jika gagal dan ada validasi
            $validation =  \Config\Services::validation();
            return redirect()->to('Superadmin/guru')->withInput()->with('validation', $validation);
        }
    }

    public function UbahDataGuru($id_guru)
    {
        $data = [
            'id_guru' => $id_guru,
            'nama_lengkap_guru' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_lengkap_guru'))), ' ', true),
        ];
        $this->GuruModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/guru');
    }

    public function HapusDataGuru($id_guru)
    {
        $data = [
            'id_guru' => $id_guru,
        ];
        $this->GuruModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/guru');
    }

    // MASTER DATA KELAS
    public function Kelas()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Kelas',
            'AmbilSemuaDataKelas' => $this->KelasModel->findAll(),
        ];
        return view('superadmin/v_kelas', $data);
    }

    public function TambahDataKelas()
    {
        $data = [
            'nama_kelas' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_kelas'))), ' ', true),
        ];
        $this->KelasModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/Kelas');
    }

    public function UbahDataKelas($id_kelas)
    {
        $data = [
            'id_kelas' => $id_kelas,
            'nama_kelas' => reduce_multiples(ucwords(strtolower($this->request->getPost('nama_kelas'))), ' ', true),
        ];
        $this->KelasModel->replace($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Kelas');
    }

    public function HapusDataKelas($id_kelas)
    {
        $data = [
            'id_kelas' => $id_kelas,
        ];
        $this->KelasModel->delete($data);
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/Kelas');
    }
}
