<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan</title>
</head>
<body>
    <h1>Buat Laporan</h1>
    <form method="post" action="/laporan/create">
        <label>Judul:</label>
        <input type="text" name="judul">
        <label>Isi:</label>
        <textarea name="isi"></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
