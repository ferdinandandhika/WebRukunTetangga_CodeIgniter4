<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = ['judul', 'isi', 'tanggal', 'user_id'];
}
