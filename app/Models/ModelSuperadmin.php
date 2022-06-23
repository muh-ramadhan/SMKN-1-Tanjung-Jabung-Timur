<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSuperadmin extends Model
{
	public function tambahDataJurusan($data)
	{
		$this->db->table('tbl_jurusan')
			->insert($data);
	}

	public function ubahDataJurusan($data)
	{
		$this->db->table('tbl_jurusan')
			->where('id_jurusan', $data['id_jurusan'])
			->update($data);
	}

	public function HapusDataJurusan($data)
	{
		$this->db->table('tbl_jurusan')
			->where('id_jurusan', $data['id_jurusan'])
			->delete($data);
	}

	// MASTER DATA PEKERJAAN
	public function ambilSemuaDataPekerjaan()
	{
		return $this->db->table('tbl_pekerjaan')
			->orderBy('id_pekerjaan', 'ASC')
			->get()
			->getResultArray();
	}

	public function tambahDataPekerjaan($data)
	{
		$this->db->table('tbl_pekerjaan')
			->insert($data);
	}

	public function ubahDataPekerjaan($data)
	{
		$this->db->table('tbl_pekerjaan')
			->where('id_pekerjaan', $data['id_pekerjaan'])
			->update($data);
	}

	public function HapusDataPekerjaan($data)
	{
		$this->db->table('tbl_pekerjaan')
			->where('id_pekerjaan', $data['id_pekerjaan'])
			->delete($data);
	}

	// MASTER DATA PENDIDIKAN
	public function ambilSemuaDataPendidikan()
	{
		return $this->db->table('tbl_pendidikan')
			->orderBy('id_pendidikan', 'ASC')
			->get()
			->getResultArray();
	}

	public function tambahDataPendidikan($data)
	{
		$this->db->table('tbl_pendidikan')
			->insert($data);
	}

	public function ubahDataPendidikan($data)
	{
		$this->db->table('tbl_pendidikan')
			->where('id_pendidikan', $data['id_pendidikan'])
			->update($data);
	}

	public function HapusDataPendidikan($data)
	{
		$this->db->table('tbl_pendidikan')
			->where('id_pendidikan', $data['id_pendidikan'])
			->delete($data);
	}

	// MASTER DATA PENGHASILAN
	public function ambilSemuaDataPenghasilan()
	{
		return $this->db->table('tbl_penghasilan')
			->orderBy('id_penghasilan', 'ASC')
			->get()
			->getResultArray();
	}

	public function tambahDataPenghasilan($data)
	{
		$this->db->table('tbl_penghasilan')
			->insert($data);
	}

	public function ubahDataPenghasilan($data)
	{
		$this->db->table('tbl_penghasilan')
			->where('id_penghasilan', $data['id_penghasilan'])
			->update($data);
	}

	public function HapusDataPenghasilan($data)
	{
		$this->db->table('tbl_penghasilan')
			->where('id_penghasilan', $data['id_penghasilan'])
			->delete($data);
	}

	// MASTER DATA AGAMA
	public function ambilSemuaDataAgama()
	{
		return $this->db->table('tbl_agama')
			->orderBy('id_agama', 'ASC')
			->get()
			->getResultArray();
	}

	public function tambahDataAgama($data)
	{
		$this->db->table('tbl_agama')
			->insert($data);
	}

	public function ubahDataAgama($data)
	{
		$this->db->table('tbl_agama')
			->where('id_agama', $data['id_agama'])
			->update($data);
	}

	public function HapusDataAgama($data)
	{
		$this->db->table('tbl_agama')
			->where('id_agama', $data['id_agama'])
			->delete($data);
	}
}
