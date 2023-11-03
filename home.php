<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body{
        background-image:url('5.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
      }
    </style>
  </head>
  <body>

    <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Food Delivery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pesan">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tampil">Contact</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
  </div>
</nav>

<!--carousel-->
<div class="container text-center mt-4 py-5">
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="6.jpg" class="d-center w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="7.jpg" class="d-center w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="8.jpg" class="d-center w-50" alt="...">
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
  </div>    
    </div>

<!--about-->
<div class="container py-5 mt-5 text-left" id="about">
  <div class="row">
    <div class="col-5">
      <h2>Tentang Kami</h2>
      Kami adalah penyedia makanan beku berkualitas tinggi dengan berbagai pilihan lezat untuk memenuhi selera Anda.Kami berkomitmen untuk memberikan kualitas terbaik.
    </div>
    <div class="col-7">
      <img src="9.jpg" alt="about" class="img-fluid">
    </div>
  </div>
</div>

<!--produk-->
<div class="container py-5" id="produk">
  <div class="row">
    <h2>Produk Kami</h2>
    <div class="col">
    <div class="card" style="width:22rem;">
     <img src="3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Burger</h5>
    <p class="card-text">burger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai.</p>
    <a href="https://wa.me/081264925342?text=kak%20saya%20mau%20Order%20" class="btn btn-primary">Beli Sekarang</a>
  </div>
</div>
</div>
  <div class="col">
  <div class="card" style="width:22rem;">
  <img src="2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spaghetti</h5>
    <p class="card-text">Spaghetti salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya. Ini adalah makanan pokok dalam masakan Italia tradisional.</p>
    <a href="#" class="btn btn-primary">Beli Sekarang</a>
  </div>
</div>
    </div>
  <div class="col">
  <div class="card" style="width:22rem;">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kentang Goreng</h5>
    <p class="card-text">Kentang goreng adalah hidangan yang dibuat dari potongan-potongan kentang yang digoreng dalam minyak goreng panas.</p>
    <a href="#" class="btn btn-primary">Beli Sekarang</a>
  </div>
</div>
  </div>
  </div>
</div>

<!--testimoni-->
<div class="container mt-5 py-5" id="pesan">
<h2>Testimoni Pelanggan</h2>
  <div class="row">
    <div class="col text-center">
    <div class="card" style="width:22rem;">
    <div class="card-body">
    <img src="01.jpg" class="card-img-top" alt="...">
    <p class="card-title">"Produk mereka luar biasa! Rasanya benar-benar enak dan sayasuka kemudahan pengemasan"</p>
    <h5 class="card-text">John Doe</h5>
  </div>
</div>
    </div>
    <div class="col text-center">
    <div class="card" style="width:22rem;">
    <div class="card-body">
    <img src="02.jpg" class="card-img-top" alt="...">
    <p class="card-title">"Saya sangat puas dengan layanan pengiriman mereka.Cepat dan aman!."</p>
    <h5 class="card-text">Jane Smith</h5>
  </div>
</div>
    </div>
    <div class="col text-center">
    <div class="card" style="width:22rem;">
    <div class="card-body">
  <img src="03.jpg" class="card-img-top" alt="...">
    <p class="card-title">"Produk berkualitas tinggi dan harga yang terjangkau.Saya akan merekomendasikan mereka kepada teman-teman saya."</p>
    <h5 class="card-text">Mary Johnson</h5>
  </div>
</div>
    </div>
  </div>
</div>

<!--hubungi kami-->
<div class="container py-5" id="tampil">
  <h2>Hubungi Kami</h2>
  <p>Jika anda memiliki pertanyaan atau ingin berbicara dengan kami, jangan ragu untuk menghubungi kami.</p>
  <div class="row">
  <div class="col">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.990409204419!2d98.61829690990709!3d3.589674296369392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e4f46b5ab19%3A0x447dc6ab3d465c1e!2sSekolah%20Menengah%20Kejuruan%20Negeri%209%20Medan!5e0!3m2!1sid!2sid!4v1699001824921!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    <div class="col">
        <b>Food Delivery</b><br>
        Jalan Contoh no. 123<br>
        Kota Contoh,12345<br>
        Telepon:(123) 456-7899<br>
        Email: info@Fooddelivery.com<br><br>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </div>
</div>
</div>

<!--footer-->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"
        ><i class="fab fa-brands fa-facebook-f fa-xl" style="color: #ffffff;"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
        ><i class="fab fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Fooddelivery</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
  </body>
</html>