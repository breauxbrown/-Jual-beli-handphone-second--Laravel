<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Kita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Online Kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.html">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Toko Online Kita</h1>
            <p class="lead">Marketplace Handphone Second Terpercaya</p>
            <a href="#produk" class="btn btn-light btn-lg">Jelajahi Sekarang</a>
        </div>
    </header>

    <section id="produk" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Terbaru</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/esdua.webp') }}" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Handphone A</h5>
                            <p class="card-text">Handphone second densgan kondisi mulus dan harga terjangkau.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Handphone B</h5>
                            <p class="card-text">Handphone second berkualitas tinggi dengan garansi.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/sumsang.png" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Handphone C</h5>
                            <p class="card-text">Dapatkan handphone second terbaik dengan harga spesial.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
