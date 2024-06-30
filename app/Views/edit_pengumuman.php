<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengumuman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Pengumuman</h1>
        <form method="post" action="<?= base_url('pengurus/updatePengumuman/'.$pengumuman['id']) ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Pengumuman:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $pengumuman['judul'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Pengumuman:</label>
                <textarea class="form-control" id="isi" name="isi" rows="4" required><?= $pengumuman['isi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pelaksanaan:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $pengumuman['tanggal'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                <input type="time" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?= $pengumuman['waktu_pelaksanaan'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Pengumuman</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
