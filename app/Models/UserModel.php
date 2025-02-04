<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nama_lengkap', 'email', 'username', 'password', 'jenis_kelamin', 'role'];
}
