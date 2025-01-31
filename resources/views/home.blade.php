<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Kita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.8);
           
        }
        .hero {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeIn 1s ease-in-out;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff6f00;
            border: none;
            padding: 12px 25px;
            font-size: 1.2rem;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #e65100;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Toko Online Kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/produk') }}">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero mt-5">
        <div class="container">
            <h1>Marketplace Handphone Second Terpercaya</h1>
            <p>Dapatkan handphone bekas berkualitas dengan harga terbaik</p>
            <a href="#" class="btn btn-custom text-white">Jelajahi Sekarang</a>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
