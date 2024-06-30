<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Warga extends BaseController
{
    public function createLaporan()
    {
        // Pastikan nama lengkap ada di sesi
        $nama_lengkap = session()->get('nama_lengkap');
        if (!$nama_lengkap) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $laporanModel = new LaporanModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi'   => $this->request->getPost('isi'),
            'tanggal' => date('Y-m-d'), // Menyimpan tanggal saat ini
            'pelapor' => $nama_lengkap, // Mengambil nama lengkap dari sesi
            'created_at' => date('Y-m-d H:i:s') // Menyimpan timestamp saat ini
        ];

        if ($laporanModel->save($data)) {
            return redirect()->to('/warga')->with('success', 'Laporan berhasil dibuat.');
        } else {
            return redirect()->to('/warga')->with('error', 'Gagal membuat laporan.');
        }
    }
}
