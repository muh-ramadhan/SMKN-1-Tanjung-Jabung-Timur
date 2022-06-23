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
        helper('form');
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
    public function pesertadidik()
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
            'nama_lengkap_pesertadidik' => $this->request->getPost('nama_lengkap_pesertadidik'),
        ];
        $this->PesertaDidikModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pesertadidik');
    }

    public function UbahDataPesertaDidik($id_pesertadidik)
    {
        $data = [
            'id_pesertadidik' => $id_pesertadidik,
            'nama_lengkap_pesertadidik' => $this->request->getPost('nama_lengkap_pesertadidik'),
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
    public function jurusan()
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
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];
        $this->JurusanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/jurusan');
    }

    public function UbahDataJurusan($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
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
            'nama_pekerjaan' => $this->request->getPost('nama_pekerjaan'),
        ];
        $this->PekerjaanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pekerjaan');
    }

    public function UbahDataPekerjaan($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'nama_pekerjaan' => $this->request->getPost('nama_pekerjaan'),
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
            'nama_pendidikan' => $this->request->getPost('nama_pendidikan'),
        ];
        $this->PendidikanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pendidikan');
    }

    public function UbahDataPendidikan($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'nama_pendidikan' => $this->request->getPost('nama_pendidikan'),
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
            'nama_penghasilan' => $this->request->getPost('nama_penghasilan'),
        ];
        $this->PenghasilanModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/penghasilan');
    }

    public function UbahDataPenghasilan($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
            'nama_penghasilan' => $this->request->getPost('nama_penghasilan'),
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
            'nama_agama' => $this->request->getPost('nama_agama'),
        ];
        $this->AgamaModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/agama');
    }

    public function UbahDataAgama($id_agama)
    {
        $data = [
            'id_agama' => $id_agama,
            'nama_agama' => $this->request->getPost('nama_agama'),
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
            'nama_pembayaran' => $this->request->getPost('nama_pembayaran'),
        ];
        $this->PembayaranModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/pembayaran');
    }

    public function UbahDataPembayaran($id_pembayaran)
    {
        $data = [
            'id_pembayaran' => $id_pembayaran,
            'nama_pembayaran' => $this->request->getPost('nama_pembayaran'),
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
}
