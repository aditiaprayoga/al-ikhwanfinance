<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Al-IkhwanFinance</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            background: url(img/masjidalikhwan.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }   

        .parallax2 {
            position: relative;
            background: url('img/alikhwanview.jpg') no-repeat fixed;
            background-size: cover;
        }
        .parallax2::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna overlay gelap (hitam) dengan opacity 50% */
        }

.parallax2-content {
    position: relative; /* Pastikan konten tetap di atas overlay */
    z-index: 1; /* Pastikan konten di atas overlay */
    color: #fff; /* Contoh: warna teks putih */
    padding: 20px; /* Contoh: padding untuk konten */
}

    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
            <img src="img/logomasjidalikhwan.png" width="80px" style="margin-right: 10px; margin-bottom: 2px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Sistem Akuntansi Masjid Al-Ikhwan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <header id="home" class="text-light parallax">
    <div class="container konten">
        <h1 style="font-size: 36pt; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Al-IkhwanFinance</h1>
        <p class="lead" style="font-size: 16pt;">Aplikasi pencatatan keuangan harian dengan
            fitur
            transaksi terbaik</p>
        <a href="login" class="btn btn-outline-light button">Get Started</a>
    </div>
</header>

    <!-- header -->

    <!-- features -->
    <section id="features" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FEATURES</div>

        <style>
    .features-text {
        font-weight: bold;
        font-size: 24px; /* Sesuaikan ukuran teks sesuai keinginan */
        text-transform: uppercase; /* Agar semua huruf besar */
        color: #333; /* Pilih warna teks yang tegas */
    }
</style>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">Al-IkhwanFinance</h4>
                <p class="isi-fitur text-center">Al-IkhwanFinance adalah aplikasi web yang dirancang untuk mencatat dan memantau sumber dana Masjid Al Ikhwan. 
                    Aplikasi ini memiliki berbagai fitur menarik yang memungkinkan Anda untuk mengelola dan melacak pemasukan dari donasi, kotak amal, zakat, infaq, dan shodaqoh dengan mudah dan efisien. 
                    Direkomendasikan bagi pengurus masjid yang ingin memastikan transparansi dan akurasi dalam pengelolaan keuangan masjid. </p>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/zakat.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Transaksi Harian</h4>
                    <p class="isi-fitur">Aplikasi ini menawarkan pencatatan transaksi harian untuk mengelola keuangan Masjid Al Ikhwan. 
                        Dengan fitur ini, pemantauan pemasukan dari donasi, kotak amal, zakat, infaq, dan shodaqoh jadi lebih mudah. 
                        Data keuangan masjid tersimpan dengan aman, memastikan transparansi dan keamanan dalam pengelolaan keuangan.</p>
                </div>
            </div>

            <!-- <div class="row row2"> -->
                <!-- <div class="col-lg-6 fiturs text-right"> -->
                    <!-- <h4 class="headline">Rekening Pribadi</h4> -->
                    <!-- <p class="isi-fitur">Kami menyediakan fitur rekening pribadi yang dapat mempermudah anda dalam -->
                        <!-- melakukan pengelolaan keuangan di dompet dan juga di rekening anda. Dengan fitur ini, -->
                        <!-- pengelolaan -->
                        <!-- uang anda di rekening menjadi lebih mudah dan terkelola dengan baik.</p> -->
                <!-- </div> -->
                <!-- <div class="col-lg-6 fiturs"> -->
                    <!-- <div class="gbr"> -->
                        <!-- <div class="box"> -->
                            <!-- <img src="img/rekening.jpg" class="gambar-fitur img" width="100%"> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->

            <div class="row row2">
                <div class="col-lg-6 fiturs text-right">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/monitoring keuangan.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Monitoring Keuangan</h4>
                    <p class="isi-fitur">Monitoring keuangan masjid tentunya sangat penting untuk mengelola dengan baik dana yang masuk dan keluar. 
                        Aplikasi ini menyediakan dashboard khusus yang dilengkapi dengan berbagai fitur, termasuk informasi saldo, total dana yang masuk dan keluar, serta detail rekening.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- features -->

    <!-- about us -->
    <section id="about" class="bg-primary parallax2">
        <div class="container">
        <div class="garis text-center">DKM TEAM</div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/romzah.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Ketua</h3>
                            <p>Romzah Budi Setiawan</p>
                            <p>Memimpin dan mewakili masjid di masyarakat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/hartono.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Wakil Ketua</h3>
                            <p>Hartono Subagja</p>
                            <p>Membantu pembinaan dan pengembangan anggota DKM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/anang.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Penasehat</h3>
                            <p>Anang Ma'ruf</p>
                            <p>Mendukung pengambilan keputusan pimpinan organisasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/zulkifli.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Dewan Syariah</h3>
                            <p>Zulkifli Iskandar Muda</p>
                            <p>Memastikan kesesuaian semua kegiatan dengan prinsip-prinsip hukum Islam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/ahmad.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Sekretaris</h3>
                            <p>Ahmad Hasyim Asy'ari</p>
                            <p>Memastikan kelancaran operasional dan administratif DKM masjid</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/sofyan.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Bendahara</h3>
                            <p>Sofyan Abdullah</p>
                            <p>Mengelola pemasukan dan pengeluaran dana masjid</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="garis garis2 text-center">CONTACT US</div>
                    <div class="row text-center">
                        <div class="col col1">
                            <a href="https://www.facebook.com" target="_blank">
                                <!-- <img src="icons/facebook.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/facebook.png" width="70%">
                            </a>
                        </div>
                        <div class="col col2">
                            <a href="https://plus.google.com" target="_blank">
                                <!-- <img src="icons/google-plus.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/96/000000/google-plus-squared.png" width="70%">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="https://www.instagram.com" target="_blank">
                                <!-- <img src="icons/instagram.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/instagram-new.png" width="70%">
                            </a>
                        </div>
                        <div class="col col4">
                            <a href="https://www.linkedin.com" target="_blank">
                                <!-- <img src="icons/linkedin.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/linkedin.png" width="70%">
                            </a>
                        </div>
                        <div class="col col5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <!-- <img src="icons/pinterest.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/pinterest.png" width="70%">
                            </a>
                        </div>
                    </div>
                    <div class="row row3 text-center">
                        <div class="col-4 text-right">
                            <a href="https://twitter.com" target="_blank">
                                <!-- <img src="icons/twitter.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/twitter.png" width="38%">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.whatsapp.com" target="_blank">
                                <!-- <img src="icons/whatsapp.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/whatsapp.png" width="38%">
                            </a>
                        </div>
                        <div class="col-4 text-left">
                            <a href="https://www.youtube.com" target="_blank">
                                <!-- <img src="icons/youtube.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/youtube-squared.png" width="38%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- Footer -->
    <div class="py-3 bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Main</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="#home" class="js-scroll-trigger foot-link">Home</a> </li>
                        <li> <a href="#features" class="js-scroll-trigger foot-link">Features</a> </li>
                        <li> <a href="#about" class="js-scroll-trigger foot-link">About Us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Others</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="faq" class="foot-link">FAQ</a> </li>
                        <li> <a href="https://www.youtube.com/@irmastvirmassemanan5073/videos" class="foot-link">DKM Videos</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>About</b> </h5>
                    <p class="mb-0">Al-IkhwanFinance: Aplikasi web untuk pengelolaan dana masjid dengan transparansi dan efisiensi.</p>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>Follow us</b> </h5>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                            <a href="https://www.facebook.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-facebook-official warna-icon fa-lg mr-2"></i>
                            </a>
                            <a href="https://www.instagram.com/irmas_official_/" class="foot-link" target="_blank">
                                <i class="d-block fa fa-instagram warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://plus.google.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-google-plus-official warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.pinterest.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-pinterest-p warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.reddit.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-reddit warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://twitter.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-twitter warna-icon fa-lg ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2">Copyright © 2024 Al-IkhwanFinance. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- <footer class="bg-dark foot">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2018 Semicolon SQUAD</p>
        </div>
    </footer> -->

    <!-- js utama -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html>