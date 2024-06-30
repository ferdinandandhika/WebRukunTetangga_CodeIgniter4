<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .carousel-item {
            height: 100vh; /* Set height to 100% of viewport height */
        }
        .carousel-item img {
            object-fit: cover; /* Ensure the image covers the entire carousel item */
            height: 100%;
            width: 100%;
        }
        body {
            padding-top: 56px; /* Adjust padding to prevent content from being hidden behind the fixed navbar */
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer-content {
            text-align: center;
        }
        .embed-responsive {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- App Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rukun Tangga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('#') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('author.html') ?>">Author</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('img/rt1.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/rt2.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/rt3.png') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Pengumuman -->
    <div class="container mt-5">
        <h1>Pengumuman</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Waktu Pelaksanaan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($pengumuman as $item): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $item['judul'] ?></td>
                    <td><?= $item['isi'] ?></td>
                    <td><?= isset($item['tanggal']) ? $item['tanggal'] : 'N/A' ?></td>
                    <td><?= isset($item['waktu_pelaksanaan']) ? $item['waktu_pelaksanaan'] : 'N/A' ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Google Maps Embed -->
    <div class="container mt-5">
        <h2>Lokasi Kami</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1719663889948!6m8!1m7!1sXeIgMbKx1icVRvP0FGt0rA!2m2!1d-6.207854887122207!2d107.0276019691807!3f119.3364843153495!4f-25.39514785237715!5f0.4000000000000002" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2024 Rukun Tangga. All rights reserved.</p>
                <p>Follow us on:
                    <a href="#">Facebook</a> |
                    <a href="#">Twitter</a> |
                    <a href="#">Instagram</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>