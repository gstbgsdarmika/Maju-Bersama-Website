<?php
require 'functionsLomba.php';
$lomba = query("SELECT * FROM lomba");
$beasiswa = query("SELECT * FROM beasiswa");
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
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/responsive.css">

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">

    <!-- logo Title Bar -->
    <link rel="icon" href="image/icons/logo.svg" type="image/x-icon">
    <title>Maju Bersama</title>
    </head>
    <body>
    <!-- Navbar -->
    <div class="container-fluid position-fixed" id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-1">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="">   
                </a>
                <a class="navbar-brand fw-bold" href="#">Maju Bersama</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link me-3 page-scroll" aria-current="page" href="#">Beranda</a>
                        <a class="nav-link me-3 page-scroll" href="#tentang">Tentang</a>
                        <a class="nav-link me-3 page-scroll" href="#lomba">Lomba</a>
                        <a class="nav-link me-3 page-scroll" href="#beasiswa">Beasiswa</a>    
                        <a class="nav-link me-3 page-scroll" href="#bantuan">Bantuan</a>    
                        <a class="nav-link me-3 page-scroll" href="profil.php">History</a>    
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Hero -->
    <section id="hero">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-6 my-auto order-1 text-center text-lg-start">
                    <h1 class="fw-bold">Temukan Informasi Seputar <span class="fw-cold color-acsent">Pendidikan</span></h1>
                    <p><span class="fw-bold">Maju Bersama</span> hadir untuk membantu mahasiswa ataupun siswa untuk mempermudah dalam pencarian informasi lomba, webinar beasiswa hingga event - event lainnya.
                    </p>
                    <button class="fw-bold btn btn-custom2 my-1">Temukan Info</button>
                    <a href="#">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.375 14.125L12.375 7C11.875 6.5 11.125 6.5 10.625 7C10.125 7.5 10.125 8.25 10.625 8.75L16.75 14.875L10.625 21C10.375 21.25 10.25 21.5 10.25 21.875C10.25 22.625 10.75 23.125 11.5 23.125C11.875 23.125 12.125 23 12.375 22.75L19.5 15.625C19.875 15.375 19.875 14.625 19.375 14.125Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 order-md-2">
                    <img src="image/hero.png" alt="" width="80%" class="float-lg-end mx-auto d-block" >
                </div>
            </div>
        </div>
        <div class="gelombang">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,74.7C640,96,800,160,960,160C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        </div>
    </section>
    <!-- Akhir Hero -->

    <!-- Tentang -->
    <section id="tentang">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" data-aos-offset="-300">
                    <h2 class="fw-bold"><span class="color-acsent2">Layanan </span><span class="color-acsent">Kami</span></h2>
                    <span class="sub-title">Maju Bersama mewadahi lembaga, institusi atau yang lainnya dalam<br>menyebarkan informasi terkait lomba, beasiswa hingga<br>event - event lainnya.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card-tentang">
                        <div class="icon-tentang position-relative mx-auto">
                            <img src="image/icons/tentang 1.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                            <h3 class="fw-bold">Informasi Terbaru</h3>
                            <p>Maju Bersama banyak memberikan informasi terbaru terkait pendidikan. </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-tentang">
                        <div class="icon-tentang position-relative mx-auto">
                            <img src="image/icons/tentang 2.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                            <h3 class="fw-bold">Corporate Cooperation</h3>
                            <p>Maju Bersama berkeja sama dengan lembaga, institusi atau yang lainnya dalam menyediakaninformasi  </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-tentang">
                        <div class="icon-tentang position-relative mx-auto">
                            <img src="image/icons/tentang 3.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                            <h3 class="fw-bold">Informasi Terbaru</h3>
                            <p>Pengguna Maju Bersama akan mendapatkan dukungan layanan, tutorial hingga pelatihan langsung dari TIM Profesional kami.</p>
                    </div>
                </div> 
            </div>
            <div class="lingkaran end-0">
                <svg width="79" height="371" viewBox="0 0 79 371" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="185.5" cy="185.5" r="155.5" stroke="#E1FCF3" stroke-width="60"/>
                </svg>            
            </div>
        </div>
    </section>
    <!-- Akhir Tentang -->

    <!-- Lomba -->
    <section id="lomba">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="fw-bold"><span class="color-acsent2">Info </span> </span><span class="color-acsent">Lomba</span></h2>
                    <span class="sub-title">Maju Bersama menyediakan beragaram informasi terkait lomba yang <br> terupdate dan berkualitas.
                    </span>
                </div>
                <div class="lingkaran2 start-0">
                    <svg  width="123" height="255" viewBox="0 0 123 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="-4.5" cy="127.5" r="127.5" fill="#B0CBF8"/>
                    </svg>
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
                                    <img src="image/lomba/<?php echo $row["gambar_lomba"];  ?>" class="img-fluid rounded-start poster-lomba" alt="...">
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
                                <div class="col-1">
                                    <a href="lomba/ubahLomba.php?id=<?php echo $row["id_lomba"];?>"><img src="image/icons/edit.svg" alt=""  ></a>
                                    <a href="lomba/hapusLomba.php?id=<?php echo $row["id_lomba"];?>"onclick="return confirm('Apakah yakin ingin menghapus data ini ?')"><img src="image/icons/delete.svg" alt="" class="ms-3"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 position-relative">
                    <a href="lomba/tambahLomba.php"><button class="btn btn-custom1 fw-bold top-0 start-0">Tambah Lomba</button></a>
                    <a href="lomba/cariKeywordLomba.php"><button class="btn btn-custom3 fw-bold position-absolute top-0 end-0">Cari Lomba</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Lomba -->


    <!-- Beasiswa -->
    <section id="beasiswa">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="fw-bold"><span class="color-acsent2">Info </span> </span><span class="color-acsent">beasiswa</span></h2>
                    <span class="sub-title">Maju Bersama menyediakan beragaram informasi terkait beasiswa yang <br> terupdate dan berkualitas.
                    </span>
                </div>
                <div class="lingkaran2 start-0">
                    <svg  width="123" height="255" viewBox="0 0 123 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="-4.5" cy="127.5" r="127.5" fill="#B0CBF8"/>
                    </svg>
                </div>
            </div>
            <div class="row">
        <?php $i = 1; ?>
			<?php foreach($beasiswa as $row) : ?>
                <div class="col-lg-12">
                    <div class="card-beasiswa">
                        <div class="card mb-3 mt-5">
                            <div class="row g-0 m-3">
                                <!-- Poster beasiswa -->
                                <div class="col-md-3">
                                <img src="image/beasiswa/<?php echo $row["gambar_beasiswa"];  ?>" class="img-fluid rounded-start poster-beasiswa" alt="...">
                                </div>
                                <!-- Data beasiswa -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title color-acsent2 fw-bold"><?= $row["judul_beasiswa"] ?></h3>
                                        <p class="card-category"><?= $row["kategori_pendaftar"] ?></p>
                                        <p class="card-description"><?= $row["deskripsi_beasiswa"] ?></p>
                                    </div>
                                    <div class="row">
                                        <!-- Date beasiswa -->
                                        <div class="date-beasiswa col-4 ms-3 fw-bold">
                                            <span>
                                            <p>Deadline: <?= $row["tanggal_beasiswa"] ?></p>
                                        </div>
                                        <!-- Price beasiswa -->
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
                                <div class="col-1">
                                    <a href="beasiswa/ubahbeasiswa.php?id=<?php echo $row["id_beasiswa"];?>"><img src="image/icons/edit.svg" alt=""  ></a>
                                    <a href="beasiswa/hapusbeasiswa.php?id=<?php echo $row["id_beasiswa"];?>"onclick="return confirm('Apakah yakin ingin menghapus data ini ?')"><img src="image/icons/delete.svg" alt="" class="ms-3"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 position-relative">
                    <a href="beasiswa/tambahbeasiswa.php"><button class="btn btn-custom1 fw-bold top-0 start-0">Tambah Beasiswa</button></a>
                    <a href="beasiswa/cariKeywordbeasiswa.php"><button class="btn btn-custom3 fw-bold position-absolute top-0 end-0">Cari Beasiswa</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Beasiswa -->

    <!-- Bantuan -->
    <section id="bantuan">
        <div class="container"> 
                <div class="row justify-content-center">
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                        <h2 class="fw-bold"><span class="color-acsent2">Pertanyaan Seputar </span> </span><span class="color-acsent">MajuBersama<span></h2>
                        <span class="sub-title">Masih bingung dengan aplikasi MajuBersama ? yuk lihat FAQ dibawah ini !
                        </span>
                    </div>
                </div>
                <div class="card-bantuan" data-aos="fade-up" data-aos-duration="500">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Apa itu MajuBersama ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MajuBersama adalah aplikasi online berbasis website yang mudah untuk digunakan dan sangat optimal dalam menyebarkan informasi seputar pendidikan baik lomba, beasiswa, hingga event-event yang diselenggarakan oleh lembaga, institusi, dan lainnya yang tersebar di Indonesia.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Mengapa Anda harus memilih MajuBersama ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MajuBersama adalah aplikasi pendidikan yang bertujuan untuk mendemokratisasi informasi baik itu beasiswa, lomba, hingga event-event yang valid dan terpercaya di Indonesia. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah informasi pada MajuBersama terpercaya ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yap, tentu ! MajuBersama merupakan aplikasi berbasis website yang dikembangkan oleh Mahasiswa Informatika Universitas Udayana sehingga operasional dan kerja sama menggunakan legalitas universitas. Kami akan menjamin bahwa semua data yang dimasukkan oleh media partner tidak dapat dimodifikasi tanpa persetujuan yang bersangkutan. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Apakah saya bisa menghapus dan menambahkan informasi di MajuBersama ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bisa banget dong ! MajuBersama merupakan aplikasi yang berbasis website yang menyediakan wadah bagi anda yang ingin menambahkan dan menghapus data yang telah diinputkan dengan memasukan data pribadi anda sebagai bentuk verifikasi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                Apakah dalam mengakses MajuBersama harus terkoneksi ke internet ?
                                </button>
                            </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MajuBersama hadir berupa aplikasi pendidikan berbasis website yang harus terkoneksi internet agar dapat diakses dan berjalan dengan baik.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                Apakah MajuBersama dapat mengingatkan deadline event yang diikuti ?
                                </button>
                            </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aplikasi MajuBersama dirancang dapat memberikan peringatan 3 hari sebelum deadline event yang akan diikuti sehingga memberitahukan pengguna untuk segera menyelesaikan administrasi yang dibutuhkan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                Jika menemukan kendala dalam penggunaan website, apa yang harus dilakukan ?
                                </button>
                            </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Jika terdapat kendala, anda dapat menghubungi customer service MajuBersama di layanan Chat WhatsApp yang tersedia di halaman utama bawah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bantuan -->

    <!-- Tim -->
    <section id="tim">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="fw-bold"><span class="color-acsent2">Siapa saja TIM  </span> </span><span class="color-acsent">Maju Bersama ?<span></h2>
                    <span class="sub-title">Maju Bersama di Kembangkan oleh mahasiswa dari program studi <br>  Informatika Angkatan 2020 Universitas Udayana
                    </span>
                </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/alvin.jpg" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Alvin Wirapratama</span>
                                <span class="color-acsent profession">Back-End Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/kartika.jpg" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Kartika Noviyanti</span>
                                <span class="color-acsent profession">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/andien.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Andien Rachma </span>
                                <span class="color-acsent profession">Back-End Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/bgs darmika.jpg" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Bgs Darmika</span>
                                <span class="color-acsent profession">Front-End Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/purnami.jpg" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Purnami Pinatih</span>
                                <span class="color-acsent profession">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-tim">
                        <div class="card-content">
                            <div class="image-card-tim">
                                <img src="image/tim/agus.JPG" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="color-acsent2 name">Agus Arya</span>
                                <span class="color-acsent profession">Front-End Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </div>
    </section>
    <!-- Akhir Tim -->

    <!-- Kontak -->
    <section id="kontak">
        <div class="container"> 
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="fw-bold"><span class="color-acsent2">Hubungi TIM </span> </span><span class="color-acsent">Maju Bersama<span></h2>
                    <span class="sub-title">Untuk informasi lebih lanjut anda dapat mengirimkan pesan dengan <br> service kami melalui Chat di sudut kanan bawah website atau klik <br> tombol whatsapp di bawah ini.
                    </span>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000"> 
                    <button class="fw-bold btn btn-custom4">
                        <a class="me-4" href="#">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1074 8.96218C11.3361 8.9683 11.5897 8.98068 11.8309 9.51615C11.9909 9.87263 12.2604 10.5289 12.4799 11.0635C12.6507 11.4794 12.7912 11.8218 12.8264 11.8918C12.9067 12.0518 12.9562 12.2364 12.8511 12.4518C12.8387 12.4772 12.8271 12.5015 12.8157 12.5249C12.7315 12.6999 12.6715 12.8245 12.5296 12.9872C12.4714 13.0542 12.4106 13.1276 12.3501 13.2007C12.2437 13.3294 12.1379 13.4571 12.0473 13.5474C11.8865 13.7072 11.7195 13.8797 11.905 14.1997C12.0906 14.5197 12.7399 15.5722 13.6984 16.4215C14.7287 17.3389 15.6247 17.7255 16.0777 17.9209C16.1656 17.9589 16.2369 17.9896 16.2891 18.0156C16.6107 18.1756 16.8024 18.151 16.9879 17.9356C17.1735 17.7201 17.7917 17 18.0082 16.68C18.2185 16.36 18.4349 16.4092 18.7317 16.52C19.0285 16.6307 20.6115 17.4062 20.933 17.5662C20.9965 17.5979 21.056 17.6264 21.1111 17.6529C21.3347 17.7601 21.4869 17.833 21.5514 17.9417C21.6317 18.0771 21.6317 18.7172 21.3659 19.4681C21.0939 20.2189 19.7829 20.939 19.1892 20.9944C19.133 20.9997 19.0771 21.0065 19.0195 21.0134C18.4755 21.0792 17.785 21.1627 15.3245 20.1942C12.2928 19.0021 10.2915 16.0441 9.88691 15.4461C9.85497 15.3989 9.83297 15.3664 9.82122 15.3506L9.81437 15.3415C9.63028 15.0951 8.5041 13.5882 8.5041 12.0334C8.5041 10.5459 9.23688 9.77144 9.57111 9.4182C9.5923 9.39582 9.61187 9.37513 9.62957 9.35604C9.92633 9.03605 10.2727 8.95605 10.4891 8.95605C10.7056 8.95605 10.9219 8.95605 11.1074 8.96218Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.73022 26.6643C2.62795 27.0355 2.96606 27.3781 3.33862 27.2809L9.0978 25.7766C10.9157 26.7613 12.9625 27.2844 15.0464 27.2844H15.0526C21.9101 27.2844 27.5 21.7269 27.5 14.8954C27.5 11.5842 26.2075 8.46993 23.8579 6.13114C21.5081 3.79246 18.3855 2.5 15.0525 2.5C8.19508 2.5 2.60513 8.05756 2.60513 14.8893C2.60435 17.0625 3.178 19.1978 4.26848 21.0806L2.73022 26.6643ZM6.07615 21.5786C6.20967 21.094 6.14296 20.576 5.89101 20.1409C4.96582 18.5435 4.47947 16.7319 4.48013 14.8893C4.48013 9.10198 9.22172 4.375 15.0525 4.375C17.8899 4.375 20.537 5.47123 22.5351 7.46006C24.531 9.44671 25.625 12.0826 25.625 14.8954C25.625 20.6824 20.8835 25.4094 15.0526 25.4094H15.0464C13.2757 25.4094 11.5358 24.9648 9.99082 24.1279C9.57267 23.9014 9.08407 23.8423 8.62395 23.9625L5.17095 24.8644L6.07615 21.5786Z" fill="white"/>
                            </svg>              
                        </a> whatsapp
                    </button>
                </div>
            </div>
            <img src="image/latarkontak.png" alt="" class=" latar3 position-absolute end-0">
        </div>
    </section>
    <!-- Akhir Kontak -->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 foot">
                <img src="image/logo 2.png" alt=""> <span class="nama-logo color-acsent">Maju Bersama</span>
                <p class="sub-title">Untuk mendapatkan informasi terbaru tentang kami, <br>
                    kamu dapat mengunjungi akun media sosial kami</p>
                    <div class="sosial-icon mt-5">
                        <a href="#"><img src="./image/icons/Whatsapp.svg" alt=""></a>
                        <a href="#"><img src="./image/icons/facebook.svg" alt=""></a>
                        <a href="#"><img src="./image/icons/instagram.svg" alt=""></a>
                        <a href="#"><img src="./image/icons/twitter.svg" alt=""></a>
                    </div>
                    <div class="aplikasi mt-5">
                        <img src="image/footer 2.png" alt="">
                        <img src="image/footer 1.png" alt="">
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

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script>
        TweenMax.to('#hero img', 3.5 , { y: -20, repeat: -1,  yoyo: true });
        gsap.from('#hero h1', {duration: 1, x: -50, opacity: 0, delay: 0.5});
        gsap.from('#hero h2', {duration: 1, x: -50, opacity: 0, delay: 0.5});
        gsap.from('#hero p', {duration: 1, x: -50, opacity: 0, delay: 1});
        gsap.from('#hero button', {duration: 1.5, x: -50, opacity: 0, delay: 1.5});
        gsap.from('#hero a', {duration: 1.5, x: -50, opacity: 0, delay: 2});
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const cardTentang = document.querySelectorAll('.card-tentang');
        cardTentang.forEach((card, i)=> {
        card.dataset.aos = 'fade-up';
        card.dataset.aosDelay = i * 200;
        card.dataset.aosDuration = 1500;
        });

        const cardTim = document.querySelectorAll('.card-tim');
        cardTim.forEach((card, i)=> {
        card.dataset.aos = 'fade-up';
        card.dataset.aosDelay = i * 200;
        card.dataset.aosDuration = 1500;
        });
    </script>
    <script>
        AOS.init();
    </script>
    
    <!-- my js -->
    <script src="asset/js/script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- scroll js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="asset/js/scroll.js"></script>
    </body>
</html>