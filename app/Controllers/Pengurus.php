<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\UserModel;
use App\Models\LaporanModel;

class Pengurus extends BaseController
{
    public function index()
    {
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman'] = $pengumumanModel->findAll();
        return view('pengurus', $data);
    }

    public function createPengumuman()
    {
        $pengumumanModel = new PengumumanModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu_pelaksanaan' => $this->request->getVar('waktu_pelaksanaan')
        ];
        $pengumumanModel->save($data);
        return redirect()->to('/pengurus');
    }

    public function editPengumuman($id)
    {
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman'] = $pengumumanModel->find($id);
        return view('edit_pengumuman', $data);
    }

    public function updatePengumuman($id)
    {
        $pengumumanModel = new PengumumanModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu_pelaksanaan' => $this->request->getVar('waktu_pelaksanaan')
        ];
        $pengumumanModel->update($id, $data);
        return redirect()->to('/pengurus');
    }

    public function deletePengumuman($id)
    {
        $pengumumanModel = new PengumumanModel();
        $pengumumanModel->delete($id);
        return redirect()->to('/pengurus');
    }

    public function usersWarga()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->where('role', 'warga')->findAll();
        return view('users_warga', $data);
    }

    public function editUser($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('edit_user', $data);
    }

    public function updateUser($id)
    {
        $userModel = new UserModel();
        $data = [
            'nama_lengkap'   => $this->request->getVar('nama_lengkap'),
            'email'          => $this->request->getVar('email'),
            'username'       => $this->request->getVar('username'),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'role'           => $this->request->getVar('role')
        ];

        // Jika password diisi, maka update password
        if ($this->request->getVar('password')) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }

        $userModel->update($id, $data);
        return redirect()->to('/pengurus/usersWarga');
    }

    public function deleteUser($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/pengurus/usersWarga');
    }

    public function laporanWarga()
    {
        $laporanModel = new LaporanModel();
        $query = $laporanModel->findAll();

        // Periksa apakah query berhasil
        if ($query === false) {
            return redirect()->to('/pengurus')->with('error', 'Gagal mengambil data laporan.');
        }

        $data['laporan'] = $query;

        return view('laporan_warga', $data);
    }
}
