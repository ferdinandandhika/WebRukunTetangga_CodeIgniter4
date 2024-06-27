<!DOCTYPE html>
<html>
<head>
    <title>Pengurus</title>
</head>
<body>
    <h1>Buat Pengumuman</h1>
    <form method="post" action="/pengurus/createPengumuman">
        <label>Judul:</label>
        <input type="text" name="judul">
        <label>Isi:</label>
        <textarea name="isi"></textarea>
        <button type="submit">Kirim</button>
    </form>
    <h1>Laporan Warga</h1>
    <?php foreach ($laporan as $item): ?>
        <h2><?= $item['judul'] ?></h2>
        <p><?= $item['isi'] ?></p>
        <p><em><?= $item['tanggal'] ?></em></p>
    <?php endforeach; ?>
</body>
</html>
