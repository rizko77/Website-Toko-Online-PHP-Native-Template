<?php include 'config.php'; include 'auth_check.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Kami - KokoStore</title>
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    html, body {
        background-color: #f8f9fa;
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    main {
        flex: 1 0 auto;
    }
    footer {
        background-color: #212529;
        color: #dee2e6;
        flex-shrink: 0;
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
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active" href="tentang.php">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="lainnya.php">Lainnya</a></li>
      </ul>
      <div class="d-flex align-items-center">
        <span class="text-white me-3"><i class="bi bi-person-circle"></i> <?= $_SESSION['user']; ?></span>
        <a href="logout.php" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>
    </div>
  </div>
</nav>

<main class="container my-5">
  <div class="card shadow-sm rounded mx-auto" style="max-width: 800px;">
    <div class="card-body">
      <h3 class="card-title text-primary mb-4"><i class="bi bi-info-circle me-2"></i>Tentang Kami</h3>
      <p>Selamat datang di <strong>KOKO STORE</strong>, sebuah program yang dirancang untuk contoh dasar dalam membuat aplikasi belanja online.</p>
      <p>Website ini bersifat <strong>statis</strong> dan tidak digunakan untuk transaksi jual beli secara nyata. Seluruh data produk dan konten yang ditampilkan hanya sebagai contoh dan digunakan untuk keperluan <strong>pengujian fitur login, registrasi, logout, serta verifikasi akun</strong>.</p>
      <p>Tujuan utama dari pengembangan website ini adalah untuk menguji dan mengevaluasi sistem autentikasi serta pengelolaan sesi pengguna dalam konteks website e-commerce.</p>
      <p>Website ini dikembangkan oleh <a href="https://github.com/rizko77" target="_blank"><strong>Rizko Imsar</strong></a> sebagai bagian dari kontribusi developer di GitHub.</p>

    </div>
  </div>
</main>

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
