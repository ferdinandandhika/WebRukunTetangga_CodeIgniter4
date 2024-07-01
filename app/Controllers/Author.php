<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Author extends Controller
{
    public function index()
    {
        return view('authors');
    }
}
