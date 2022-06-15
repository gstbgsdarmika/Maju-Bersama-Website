<?php
session_start();
require 'functions.php';
if( isset($_POST["signin"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn,"SELECT * FROM admin WHERE email_admin = '$email' ");
	// cek username
	if(mysqli_num_rows($result) === 1 ){

 	// cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password_admin"])){
 			// set session 
    $_SESSION["signin"] = true;

        header("Location: index.php");
        exit;
    }
	}

	$error = true;
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

    <!-- My CSS-->
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/icons/logo.svg" type="image/x-icon">
    <title>Login</title>
  </head>
  <body>
  <section id="login" class="d-flex">
    <div class="login-left w-50 h-100">
      <div class="row justify-content-center align-content-center h-100">
        <div class="col-10">
          <img src="image/login.jpg" alt="" class="img-login">
          <p class="mt-3"><span class="fw-bold color-acsent">Maju Bersama</span> hadir untuk membantu mahasiswa ataupun siswa untuk mempermudah dalam pencarian informasi lomba, webinar beasiswa hingga event - event lainnya.
          </p>
        </div>
      </div>
    </div>

    <div class="login-right w-50 h-100">
      <div class="row justify-content-center align-content-center h-100">
        <div class="col-8">
          <div class="card-login">
            <div class="content-login">
              <div class="title-login">
                <h1>Login <span class="color-acsent">Maju Bersama</span></h1>
                <p class="mt-2">Selamat datang kembali! Silakan masukkan detail Anda.</p>
              </div>
            <form action="" method="POST">
            <?php if(isset ($error)) : ?>
            <p class="ms-5" style="color : red; font-style: italic;">username / password salah</p>
            <?php endif; ?>
              <div class="login-form">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">  
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">   
                  <a href="#" class="text-decoration-none text-center">Forgot password</a>     
                <button type="submit" name="signin" class="signin">Sign In</button>  
                    <button class="signin-google">
                        <img src="image/icons/google.svg" alt="">
                      Sign In With Google
                  </button>
            </form>
                <div class="text-center">
                  <span class="d-inline">Don't have an account? <a href="registrasi.php" class="d-inline text-decoration-none">Sign up for free</a></span>
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