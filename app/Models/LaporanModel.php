<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'tanggal', 'pelapor', 'created_at'];
}
