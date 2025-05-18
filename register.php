<?php include 'config.php'; ?>
<?php include 'layouts/head.php'; ?>


<!DOCTYPE html>
<html lang="id">
<style>
  body {
    background: linear-gradient(to right,rgb(37, 36, 110),rgb(131, 161, 185));
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', sans-serif;
  }
  .form-box {
    background-color: white;
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  }
  .form-box h3 {
    font-weight: bold;
  }
  .form-control {
    border-radius: 10px;
  }
  .btn-primary {
    border-radius: 10px;
    font-weight: bold;
  }
</style>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="form-box">
          <h3 class="text-center mb-4">Daftar Akun Baru</h3>
          <form method="post">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary w-100">Daftar</button>
          </form>
          <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>

          <?php
          if (isset($_POST['register'])) {
              $username = htmlspecialchars($_POST['username']);
              $email = $_POST['email'];
              $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
              if (mysqli_num_rows($cek) > 0) {
                  echo "<div class='alert alert-danger mt-3'>Username sudah digunakan!</div>";
              } else {
                  $q = mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
                  echo $q 
                      ? "<div class='alert alert-success mt-3'>Berhasil daftar! <a href='login.php'>Login sekarang</a></div>"
                      : "<div class='alert alert-danger mt-3'>Gagal daftar!</div>";
              }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
