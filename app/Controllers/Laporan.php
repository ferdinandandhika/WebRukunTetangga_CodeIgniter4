<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    public function create()
    {
        $laporanModel = new LaporanModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi'   => $this->request->getPost('isi'),
            'tanggal' => date('Y-m-d'), // Menyimpan tanggal saat ini
            'user_id' => session()->get('user_id'), // Pastikan untuk menyimpan ID pengguna yang membuat laporan
            'created_at' => date('Y-m-d H:i:s') // Menyimpan timestamp saat ini
        ];

        if ($laporanModel->save($data)) {
            return redirect()->to('/laporan')->with('success', 'Laporan berhasil dibuat.');
        } else {
            return redirect()->to('/laporan')->with('error', 'Gagal membuat laporan.');
        }
    }
}
