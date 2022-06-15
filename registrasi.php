<?php
    require 'functions.php';
  // jika tombol daftar ditekan
  if( isset($_POST["registrasi"])) {
    if( registrasi($_POST) > 0 ){
      echo "<script>
          alert('Registrasi Berhasil !');
          document.location.href = 'index.php';
      </script>";
    } else{
      echo "<script>
          alert('Registrasi Gagal !');
      </script>";
    }

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/icons/logo.svg" type="image/x-icon">
  <title>Registrasi</title>
  </head>
  <body>
  <section id="register" class="d-flex">
    <div class="register-left w-50 h-100">
      <div class="row justify-content-center align-content-center h-100">
        <div class="col-10">
          <img src="image/register.jpg" alt="" class="img-register">
          <p><span class="fw-bold color-acsent">Maju Bersama</span> hadir untuk membantu mahasiswa ataupun siswa untuk mempermudah dalam pencarian informasi lomba, webinar beasiswa hingga event - event lainnya.
          </p>
        </div>
      </div>
    </div>

    <div class="register-right w-50 h-100">
      <div class="row justify-content-center align-content-center h-100">
        <div class="col-8">
          <div class="card-register">
            <div class="content-register">
              <div class="title-register text-center">
                <h1>Daftar <span class="color-acsent">Maju Bersama</span></h1>
                <p>Sudah punya akun MajuBersama? <a href="login.php" class="d-inline text-decoration-none"><span class="color-acsent"> Masuk</span></a></p>
              </div>
              <div class="register-form">
                <form action="" method="POST">
                    <ul class="form-registrasi">
                        <li>
                            <label for="username" class="form-label">Username</label>
                            <input type="username" name="username" class="form-control" id="username" placeholder="Enter your username">  
                        </li>
                        <li>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">  
                        </li>
                        <li>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">  
                        </li>
                        <li>
                            <label for="password" class="form-label">Confirmation Password</label>
                            <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirmation your password">  
                        </li>
                        <li>
                            <button type="submit" name="registrasi" class="daftar" >Daftar</button>  
                            <button class="signin-google"><img src="image/icons/google.svg" class="me-2" alt="">Sign In With Google </button>
                        </li>
                    </ul>
                </form>
                <div class="text-center">
                  <span span class="d-inline">Dengan mendaftar, saya menyetujui <br>
                    <a href="#" class="d-inline text-decoration-none">Syarat dan Ketentuan</a> serta
                    <a href="#" class="d-inline text-decoration-none">Kebijakan Privasi</a>
                  </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>