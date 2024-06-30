<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan</title>
</head>
<body>
    <h1>Buat Laporan</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form method="post" action="/laporan/create">
        <label>Judul:</label>
        <input type="text" name="judul" required>
        <label>Isi:</label>
        <textarea name="isi" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
