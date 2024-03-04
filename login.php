<?php 
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="assets/img/bag.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="proses_login.php" method="post">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar Disini!</a></p>
                    <p>Atau klik <a href="index.php">Kembali</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bootom">
    <p>&copy; ARTIKA RAHMADHANI</p>
</footer>

 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>