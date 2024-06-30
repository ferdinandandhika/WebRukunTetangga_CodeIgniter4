<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class Home extends BaseController
{
    public function index()
    {
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman'] = $pengumumanModel->findAll();

        // Debugging: Periksa apakah data pengumuman berhasil diambil
        if (empty($data['pengumuman'])) {
            echo "Tidak ada pengumuman yang ditemukan.";
            return;
        }

        return view('home', $data);
    }
}

