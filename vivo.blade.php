<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Jual Beli Handphone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-light" ><b>ADA Phone Store</b></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary">Logout</button>
    </form>

    </form>

            </a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-light" href="/dashboard">Home</a>
          <a class="p-2 text-muted" href="/apple">Apple</a>
          <a class="p-2 text-muted" href="/samsung">Samsung</a>
          <a class="p-2 text-muted" href="/xiaomi">Xiaomi</a>
          <a class="p-2 text-muted" href="/vivo">Vivo</a>
        </nav>
      </div>




    <style>
        body {
    background-color: #121212; /* Warna dasar dark */
    color: white;
}



h2 {
    color: white;
}


        .body {
            background-color: black;
        }

        .product-card .card {
    background-color: transparent;
    border: none;
    box-shadow: none;
}

.hero {
    background-size: cover;
    background-position: center;
    height: 650px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    opacity: 0.9;
    border-radius: 30px;
}


.footercontainer {
    background: rgba(0, 0, 0, 0.5); /* Background semi-transparan agar teks lebih jelas */
    padding: 20px;
    border-radius: 10px;
}
        .product-card {
            margin-bottom: 20px;
        }

        .hero .container h1, 
        .hero .container p {
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}


        .card-img-top {
          background-color: transparent !important;
          object-fit: contain;
          max-height: 150px; /* Sesuaikan ukuran logo */
          padding: 10px; /* Agar tidak terlalu mepet */
        }

        

        .product-card .card-title,
        .product-card .card-text,
        .product-card .btn {
        color: white; /* Warna teks putih */
         }

        .container {
            margin-bottom: 100px;
            
           
        }


        .product-card .card {
            background: rgba(255, 255, 255, 0.1); /* Transparan 10% */
            backdrop-filter: blur(10px); /* Efek blur */
            border: 2px solid rgba(255, 255, 255, 0.3); /* Border transparan */
            border-radius: 10px; /* Biar sudutnya agak melengkung */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Bayangan halus */
        }
        

        

        .product-card .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
}
        
    </style>
</head>
<body>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        

        <div class="carousel-item active">
            <div class="hero" style="background-image: url('images/jember.jpg');">
                <div class="container">
                   
                </div>
            </div>
        </div>
        
    

         <!-- Slide 2 -->
         <div class="carousel-item">
            <div class="hero" style="background-image: url('images/jembur.WEBP');">
                <div class="container">
                    
                </div>
            </div>
        </div>

        
         <!-- Slide 2 -->
         <div class="carousel-item">
            <div class="hero" style="background-image: url('images/penyets.jpg');">
                <div class="container">
                    
                </div>
            </div>
        </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="hero" style="background-image: url('images/alans.AVIF');">
                <div class="container">
                    
                </div>
            </div>
        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

    <div class="container mt-5" >
    <h2 class="text-white text-center" style="margin-bottom: 40px;">VIVO SERIES</h2>
    
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/Y100.png') }}" class="card-img-top" alt="Handphone 1" >
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO Y100 5G</h5>
                    <p class="card-text text-white">-Powered By ZEISS.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/V30E.PNG') }}" class="card-img-top" alt="Handphone 2">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO V30E 5G</h5>
                    <p class="card-text text-white">Deskripsi singkat tentang handphone 2.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/v27.png') }}" class="card-img-top" alt="Handphone 2">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO V27</h5>
                    <p class="card-text text-white">Deskripsi singkat tentang handphone 2.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/V25E.png') }}" class="card-img-top" alt="Handphone 2">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO V25e</h5>
                    <p class="card-text text-white">Deskripsi singkat tentang handphone 2.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/Y19S.png') }}" class="card-img-top" alt="Handphone 2">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO Y19s</h5>
                    <p class="card-text text-white">Deskripsi singkat tentang handphone 2.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-4 col-sm-6 col-12 mb-3 d-flex">
            <div class="card border-light bg-dark h-100 w-100" style="border-radius: 20px;">
                <img src="{{ asset('images/V30E.png') }}" class="card-img-top" alt="Handphone 3">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title text-white">VIVO V30e</h5>
                    <p class="card-text text-white">Deskripsi singkat tentang handphone 3.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   <!-- FOOTER -->
<footer style="background-color: #5e5757; padding: 40px; border-top: 2px solidrgba(138, 132, 132, 0.67);">
  <div class="footercontainer">
    <div class="row">
      
      <!-- Pusat Informasi -->
      <div class="col-md-3">
        <h5>PUSAT INFORMASI</h5>
        <p><strong>Alamat:</strong><br>Jl. Sidangsuka</p>
        <p><strong>Kontak:</strong><br>Line: Pissbreauxbrown<br>Email: hafidzrizki876.com</p>
      </div>
      
      <!-- Instagram -->
      <div class="col-md-3">
        <h5>INSTAGRAM</h5>
        <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/hafidzrzkii?igsh=MTRxeGV0bjlzdnRtNg==">@alnylndprtm</a></p >
        <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/mouzzle"> @zidanrazqy</a></p>
        <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/indranugrahawira?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="> @hafidzrzkii</a></p>
      </div>
      
      <!-- YouTube -->
      <div class="col-md-3">
        <h5>YOUTUBE</h5>
        <p><i class="fab fa-youtube"></i> <a href="https://www.youtube.com/channel/UCFMZHIQMgBXTSxsr86Caazw">@kelsaradan</a></p>
        <p><i class="fab fa-youtube"></i> <a href="https://www.youtube.com/channel/UCFMZHIQMgBXTSxsr86Caazw">@jacka$$piss</a></p>
        <p><i class="fab fa-youtube"></i> <a href="https://www.youtube.com/channel/UCFMZHIQMgBXTSxsr86Caazw">@asephendra</a></p>
      </div>
      
      <!-- TikTok -->
      <div class="col-md-3">
        <h5>TIKTOK</h5>
        <p><i class="fab fa-tiktok"></i> <a href="https://www.tiktok.com/@tokyotrips17?is_from_webapp=1&sender_device=pc">urfuturehusband</a></p>
        <p><i class="fab fa-tiktok"></i> <a href="https://www.tiktok.com/@drunkclam17?is_from_webapp=1&sender_device=pc">pissbreaux's</a></p>
      </div>
      
    </div>
    
    <div class="container-fluid pl-3 pr-3 p-3">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; Arlan,Zidan,Hafidz Company, Inc.<a href="#"></a><a href="#"></a></p>
    </div>
  </div>
</footer>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>