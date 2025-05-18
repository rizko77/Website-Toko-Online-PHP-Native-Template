<?php include 'config.php'; 
include 'auth_check.php'; 

if (!isset($_SESSION['user']) && isset($_COOKIE['remember_me'])) {
    $username = $_COOKIE['remember_me'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $username;
    } else {
        setcookie("remember_me", "", time() - 3600, "/");
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home - KokoStore</title>
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color:rgb(236, 234, 234);
    }
    .navbar {
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .card-product {
      border: none;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.07);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-product:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 18px rgba(0,0,0,0.15);
    }
    .card-product img {
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      height: 200px;
      object-fit: cover;
    }
    footer {
      background-color: #212529;
      color: #dee2e6;
    }
    footer a {
      color: #dee2e6;
      text-decoration: none;
    }
    footer a:hover {
      color: #0d6efd;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold py-3" href="index.php"><i class="bi bi-shop-window me-2"></i>KOKO STORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="lainnya.php">Lainnya</a></li>
        </ul>
        <?php if (isset($_SESSION['user'])): ?>
          <div class="d-flex align-items-center">
            <span class="text-white me-3"><i class="bi bi-person-circle"></i> <?= htmlspecialchars($_SESSION['user']); ?></span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">
              <i class="bi bi-box-arrow-right"></i> Logout
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </nav>


  <div class="container text-center py-5">
    <h3 class="display-10 fw-bold">Selamat Datang di <span class="text-primary">KOKO STORE</span></h3>
    <p class="lead">Temukan pilihan makanan dan pakaian terbaik untukmu!</p>
  </div>

  <div class="container">
    <div class="row g-4">

      <!-- Produk 1 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/nasi.jpg" class="card-img-top" alt="Nasi Goreng Spesial" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Nasi Goreng Spesial</h5>
            
            <p class="text-success fw-semibold mb-1">Rp18.000</p>
            <p class="card-text text-muted">Lezat dan gurih!</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 2 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/mie.jpg" class="card-img-top" alt="Mie Ayam Hijau" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Mie Ayam Hijau</h5>
            <p class="text-success fw-semibold mb-1">Rp15.000</p>
            <p class="card-text text-muted">Sehat dan nikmat.</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 3 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/geprek.jpg" class="card-img-top" alt="Ayam Geprek Lava" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Ayam Geprek Lava</h5>
            <p class="text-success fw-semibold mb-1">Rp22.000</p>
            <p class="card-text text-muted">Super pedas!</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 4 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/kaos.jpg" class="card-img-top" alt="Kaos Keren" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Kaos Keren Anime</h5>
            <p class="text-success fw-semibold mb-1">Rp60.000</p>
            <p class="card-text text-muted">Bahan adem dan trendy.</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 5 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/jaket.jpg" class="card-img-top" alt="Jaket Stylish" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Jaket Stylish</h5>
            <p class="text-success fw-semibold mb-1">Rp120.000</p>
            <p class="card-text text-muted">Hangat dan keren.</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 6 -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/kemeja.jpg" class="card-img-top" alt="Kemeja Slim Fit" style="height: 300px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Kemeja Slim Fit</h5>
            <p class="text-success fw-semibold mb-1">Rp95.000</p>
            <p class="card-text text-muted">Untuk gaya formal.</p>
            <a href="#" class="btn btn-primary mt-auto"><i class="bi bi-cart-plus"></i> Beli sekarang</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container my-4">
    <div class="alert alert-warning text-center fw-semibold" role="alert">
      Web Toko Online ini bersifat statis, Ini di rancang untuk menguji kesuksesan dari sesi login yang telah di buat
    </div>
  </div>

  <footer class="text-center py-4 mt-5">
    <div class="container">
      <p class="mb-1">&copy; <?= date('Y'); ?> <strong>KOKO STORE</strong>. All rights reserved.</p>
      <small>
        <a href="#">Kebijakan Privasi</a> · 
        <a href="#">Syarat & Ketentuan</a> · 
        <a href="#">Kontak Kami</a> ·
        <a href="https://github.com/rizko77" target="_blank">GitHub</a>
      </small>
    </div>
  </footer>

</body>
</html>
