<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaDidikModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_pesertadidik';
    protected $primaryKey       = 'id_pesertadidik';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    =
    [
        'rfid',
        'id_jurusan',
        'id_jalur_masuk',
        'id_kelas',
        'no_pendaftaran',
        'tanggal_pendaftaran',
        'tahun_pendaftaran',
        'nisn',
        'nik_pesertadidik',
        'nama_lengkap_pesertadidik',
        'tempat_lahir_pesertadidik',
        'tanggal_lahir_peserta_didik',
        'jenis_kelamin',
        'foto_pesertadidik',
        'no_hp_pesertadidik',
        'no_ijazah_pesertadidik',
        'no_skhun_pesertadidik',
        'nama_sekolah_asal',
        'tahun_lulus_sekolah_asal',
        'id_agama',
        'id_ayah',
        'id_ibu',
        'id_kecamatan',
        'id_kabupaten',
        'id_provinsi'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
