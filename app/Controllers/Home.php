<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class Home extends BaseController
{
    public function index()
    {
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman'] = $pengumumanModel->findAll();
        return view('home', $data);
    }
}
