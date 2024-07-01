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
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            color: white; /* Mengubah warna teks menjadi putih */
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #ffc107; /* Warna teks saat hover */
        }
        .sidebar .profile img {
            border: 2px solid #ffc107;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .table-custom {
            background-color: #f8f9fa; /* Warna latar belakang tabel */
            border-radius: 10px; /* Membulatkan sudut tabel */
            overflow: hidden; /* Menghindari konten keluar dari tabel */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        }
        .table-custom th, .table-custom td {
            padding: 15px; /* Menambahkan padding pada sel tabel */
            text-align: center; /* Menyelaraskan teks ke tengah */
        }
        .table-custom th {
            background-color: #343a40; /* Warna latar belakang header tabel */
            color: white; /* Warna teks header tabel */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center profile">
            <?php
                $profile_picture = session()->get('jenis_kelamin') == 'Perempuan' ? 'profileperempuan.png' : 'profile.png';
            ?>
            <img src="<?= base_url('img/' . $profile_picture) ?>" class="rounded-circle" alt="Profile Picture" width="100" height="100">
            <h4><?= session()->get('nama_lengkap') ?></h4>
            <p><?= session()->get('email') ?></p>
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
        </div>
        <div class="mt-3 text-center">
            <a href="<?= base_url('pengurus') ?>" class="btn btn-primary btn-block">Dashboard Pengurus</a>
            <a href="<?= base_url('pengurus/laporanWarga') ?>" class="btn btn-primary btn-block mt-2">Laporan Warga</a>
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1>Users Warga</h1>
            <div class="table-responsive table-custom">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
</html>



</html>

</html>

</body>
</html>

</body>
</html>

</body>
</html>


</body>
</html>







</html>

