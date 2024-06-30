<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'pengumuman';
    protected $allowedFields = ['judul', 'isi', 'tanggal', 'waktu_pelaksanaan'];
}

