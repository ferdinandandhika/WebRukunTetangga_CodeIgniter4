<!DOCTYPE html>
<html>
<head>
    <title>Users Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center">
            <?php
                $profile_picture = session()->get('jenis_kelamin') == 'Perempuan' ? 'profileperempuan.png' : 'profile.png';
            ?>
            <img src="<?= base_url('img/' . $profile_picture) ?>" class="rounded-circle" alt="Profile Picture" width="100" height="100">
            <h4><?= session()->get('nama_lengkap') ?></h4>
            <p><?= session()->get('email') ?></p>
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
            <div class="mt-3">
                <a href="<?= base_url('pengurus') ?>" class="btn btn-primary btn-block">Dashboard</a>
                <a href="<?= base_url('pengurus/laporanWarga') ?>" class="btn btn-primary btn-block mt-2">Laporan Warga</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1>Users Warga</h1>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>Role</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($users as $user): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user['nama_lengkap'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['jenis_kelamin'] ?></td>
                        <td><?= $user['role'] ?></td>
                        <td>********</td> <!-- Password tidak ditampilkan secara langsung -->
                        <td>
                            <a href="<?= base_url('pengurus/editUser/'.$user['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('pengurus/deleteUser/'.$user['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
