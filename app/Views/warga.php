<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Warga</title>
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
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1>Dashboard Warga</h1>
            <p>Selamat datang, Warga!</p>
            <h2>Buat Laporan</h2>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('warga/createLaporan') ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Laporan:</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Laporan:</label>
                    <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Buat Laporan</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
