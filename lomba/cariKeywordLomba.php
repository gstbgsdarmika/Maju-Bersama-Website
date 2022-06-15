<?php
require '../functionsLomba.php';
$lomba = query("SELECT * FROM lomba");

// tombol cari ditekan
if(isset($_POST["cari"]) ) {
	$lomba = cari($_POST["keyword"]);
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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!--  Fontawesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/responsive.css">

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">

    <!-- logo Title Bar -->
    <link rel="icon" href="../image/icons/logo.svg type="image/x-icon">
    <title>Maju Bersama</title>
    </head>
    <body>
	<!-- Navbar -->
	<section id="navbar-fix position-fixed">
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #01358d;">
		<div class="container">
			<a class="navbar-brand" href="#">
                <img src="../image/logo.png" alt="">   
            </a>
			<a class="navbar-brand fw-bold" href="#">Maju Bersama</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link me-3 page-scroll" aria-current="page" href="../index.php">Beranda</a>
                    <a class="nav-link me-3 page-scroll" href="../index.php">Tentang</a>
                    <a class="nav-link me-3 page-scroll" href="../index.php">Lomba</a>
                    <a class="nav-link me-3 page-scroll" href="../index.php">Beasiswa</a>    
                    <a class="nav-link me-3 page-scroll" href="../index.php">Bantuan</a>    
                    <a class="nav-link me-3 page-scroll" href="#">History</a>    
                </div>
            </div>
		</div>
	</nav>
	</section>
	<!-- Akhir Navbar -->

    <!-- Cari Lomba -->
    <section id="carilomba">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="fw-bold color-acsent mb-4">Daftar Lomba <span class="color-acsent2">MajuBersama</span></h2>
                    <form action="" method="POST" class="d-flex">
                        <input name="keyword" class="form-control me-2" type="search" placeholder="Cari Lomba Berdassarkan Keyword" aria-label="Search" autocomplete="off" id="keyword">
                        <button class="btn btn-custom6 " type= submit" name="cari" id="tombol-cari">Cari</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Cari Berdasarkan
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="cariKategoriLomba.php">Kategori</a></li>
                                <li><a class="dropdown-item" href="cariTanggalLomba.php">Tanggal</a></li>
                                <li><a class="dropdown-item" href="cariBiayaLomba.php">Biaya</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php $i = 1; ?>
			<?php foreach($lomba as $row) : ?>
                <div class="col-lg-12">
                    <div class="card-lomba">
                        <div class="card mb-3 mt-5">
                            <div class="row g-0 m-3">
                                <!-- Poster Lomba -->
                                <div class="col-md-3">
                                <img src="../image/lomba/<?php echo $row["gambar_lomba"];  ?>" class="img-fluid rounded-start poster-lomba" alt="...">
                                </div>
                                <!-- Data lomba -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title color-acsent2 fw-bold"><?= $row["judul_lomba"] ?></h3>
                                        <p class="card-category"><?= $row["kategori_pendaftar"] ?></p>
                                        <p class="card-description"><?= $row["deskripsi_lomba"] ?></p>
                                    </div>
                                    <div class="row">
                                        <!-- Date lomba -->
                                        <div class="date-lomba col-4 ms-3 fw-bold">
                                            <span>
                                            <p>Deadline: <?= $row["tanggal_lomba"] ?></p>
                                            <p>Biaya Lomba: Rp. <?= $row["biaya_lomba"] ?></span>
                                            
                                        </div>
                                        <!-- Price Lomba -->
                                        <div class="col-6 ms-5">
                                            <p class="fw-bold">Price</p>
                                            <span>
                                            Free Certificate for the the participants <br>
                                                Certificate for winners <br>
                                                Money for winners <br>
                                                Networking</span>
                                            <div class="row">
                                            <div class="link-wa">
                                                <div class="col-5 offset-10">
                                                    <a href="https://wa.me/6285792715585/?text=Hello">
                                                    <button class="fw-bold btn btn-custom2 my-1">
                                                        <img src="image/icons/Whatsapp.svg" alt="">
                                                        Whatsapp</button>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Akhir Cari Lomba -->

    <!-- footer -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-md-5 foot">
                <img src="../image/logo 2.png" alt=""> <span class="nama-logo color-acsent">Maju Bersama</span>
                <p class="sub-title">Untuk mendapatkan informasi terbaru tentang kami, <br>
                    kamu dapat mengunjungi akun media sosial kami</p>
                <div class="sosial-icon mt-5">
                    <a href="#"><img src="../image/icons/Whatsapp.svg" alt=""></a>
                    <a href="#"><img src="../image/icons/facebook.svg" alt=""></a>
                    <a href="#"><img src="../image/icons/instagram.svg" alt=""></a>
                    <a href="#"><img src="../image/icons/twitter.svg" alt=""></a>
                </div>
                <div class="aplikasi mt-5">
                    <img src="../image/footer 2.png" alt="">
                    <img src="../image/footer 1.png" alt="">
                </div>
            </div>
            <div class="col-4 kolom2">
                <h2 class="color-acsent">Tautan Terkait</h2>
                <ul>
                    <li><a class="text-decoration-none" href="#">Beranda</a></li>
                    <li><a class="text-decoration-none" href="#">Tentang</a></li>
                    <li><a class="text-decoration-none" href="#">Lomba</a></li>
                    <li><a class="text-decoration-none" href="#">Beasiswa</a></li>
                    <li><a class="text-decoration-none" href="#">Event</a></li>
                </ul>
            </div>
            <div class="col-3 kolom3">
                <h2 class="color-acsent">Bantuan</h2>
                <ul>
                    <li><a class="text-decoration-none" href="#">FAQS</a></li>
                    <li><a class="text-decoration-none" href="#">Kebijakan Privasi</a></li>
                    <li><a class="text-decoration-none" href="#">Ketentuan Layanan</a></li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- my js -->
    <script src="../js/script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- scroll js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/scroll.js"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
