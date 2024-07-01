<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pengurus</title>
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
            <a href="<?= base_url('pengurus/usersWarga') ?>" class="btn btn-primary btn-block">Users Warga</a>
            <a href="<?= base_url('pengurus/laporanWarga') ?>" class="btn btn-primary btn-block mt-2">Laporan Warga</a>
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1>Dashboard Pengurus</h1>
            <p>Selamat datang, <?= session()->get('nama_lengkap') ?></p>
            <h2>Buat Pengumuman</h2>
            <form method="post" action="<?= base_url('pengurus/createPengumuman') ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Pengumuman:</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Pengumuman:</label>
                    <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Pelaksanaan:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                    <input type="time" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required>
                </div>
                <button type="submit" class="btn btn-primary">Buat Pengumuman</button>
            </form>
            <h2 class="mt-5">Daftar Pengumuman</h2>
            <div class="table-responsive table-custom">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($pengumuman as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $item['judul'] ?></td>
                            <td><?= $item['isi'] ?></td>
                            <td><?= $item['tanggal'] ?></td>
                            <td><?= $item['waktu_pelaksanaan'] ?></td>
                            <td>
                                <a href="<?= base_url('pengurus/editPengumuman/'.$item['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('pengurus/deletePengumuman/'.$item['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')">Hapus</a>
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
