<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\LaporanModel;

class Pengurus extends BaseController
{
    public function createPengumuman()
    {
        // ... kode untuk membuat pengumuman ...
    }

    public function viewLaporan()
    {
        $laporanModel = new LaporanModel();
        $data['laporan'] = $laporanModel->findAll();
        return view('pengurus', $data);
    }
}
