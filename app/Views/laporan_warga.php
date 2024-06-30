<!DOCTYPE html>
<html>
<head>
    <title>Laporan Warga</title>
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
                <a href="<?= base_url('pengurus/usersWarga') ?>" class="btn btn-primary btn-block mt-2">Users Warga</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1>Laporan Warga</h1>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($laporan as $item): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['isi'] ?></td>
                        <td><?= $item['tanggal'] ?></td>
                        <td><?= $item['pelapor'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
