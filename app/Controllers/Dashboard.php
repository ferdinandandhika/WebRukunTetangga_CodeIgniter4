<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function pengurus()
    {
        return view('pengurus');
    }

    public function warga()
    {
        return view('warga');
    }

    public function index()
    {
        return view('dashboard'); // Default dashboard
    }
}