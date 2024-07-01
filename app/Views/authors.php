<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .author-img {
            border-radius: 50%;
            width: 250px; /* Membuat gambar lebih besar */
            height: 250px;
            object-fit: cover;
        }
        .author-card {
            text-align: center;
            margin-bottom: 40px; /* Menambah jarak antar card */
            margin-right: 50px; /* Menambah jarak antar card */
        }
        .author-card h3 {
            margin-top: 25px;
            font-size: 1.5rem; /* Membuat nama author lebih besar */
        }
        .author-card p {
            font-size: 1.1rem; /* Membuat deskripsi lebih besar */
        }
        .container {
            margin-top: 100px; /* Menambah jarak dari navbar */
        }
        .content-wrapper {
            flex: 1; /* Membuat konten fleksibel untuk mendorong footer ke bawah */
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            width: 100%;
        }
        .footer-content {
            text-align: center;
        }
        .footer-content a {
            color: #ffc107;
            text-decoration: none;
        }
        .footer-content a:hover {
            text-decoration: underline;
        }
        .navbar-custom {
            background-color: #343a40; /* Warna latar belakang navbar */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #ffc107; /* Warna teks navbar */
        }
        .navbar-custom .nav-link:hover {
            color: white; /* Warna teks saat hover */
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- App Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
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
                        <a class="nav-link" href="<?= base_url('authors') ?>">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container">
            <h1 class="text-center mb-5">Authors</h1> <!-- Membuat judul di tengah -->
            <div class="row justify-content-center"> <!-- Membuat card di tengah -->
                <div class="col-md-3 author-card">
                    <img src="<?= base_url('img/rizky.jpg') ?>" class="author-img" alt="Author 1">
                    <h3>Rizky Setyo Wicaksono</h3>
                    <p>202131044</p>
                </div>
                <div class="col-md-3 author-card">
                    <img src="<?= base_url('img/asima.jpg') ?>" class="author-img" alt="Author 2">
                    <h3>Asima Kasih Gabriela Samosir</h3>
                    <p>202131178</p>
                </div>
                <div class="col-md-3 author-card">
                    <img src="<?= base_url('img/vivin.jpg') ?>" class="author-img" alt="Author 3">
                    <h3>Vivin Melanesya Wayeni</h3>
                    <p>202131047</p>
                </div>
            </div>
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
