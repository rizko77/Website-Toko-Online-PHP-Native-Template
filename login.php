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
  .btn-success {
    border-radius: 10px;
    font-weight: bold;
  }
  .form-check-label {
    cursor: pointer;
  }
</style>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="form-box">
          <h3 class="text-center mb-4">Login</h3>
          <form method="post">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember">
              <label class="form-check-label" for="remember">Ingat Saya</label>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
          </form>
          <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>

          <?php
          if (isset($_POST['login'])) {
              $username = htmlspecialchars($_POST['username']);
              $password = $_POST['password'];
              $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
              $user = mysqli_fetch_assoc($result);
              if ($user && password_verify($password, $user['password'])) {
                  $_SESSION['user'] = $username;
                  if (isset($_POST['remember'])) {
                      setcookie("remember_me", $username, time() + (86400 * 7), "/");
                  }
                  header("Location: index.php");
                  exit;
              } else {
                  echo "<div class='alert alert-danger mt-3'>Username atau password salah!</div>";
              }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
