<?php
$gugatan = 'Perkara Tersebut';
$biayaSidang = 0;

//cek ada kiriman atau tidak
if (isset($_POST['kelurahan']) && isset($_POST['kelurahan_dua'])) {
    $biayaRadiusSatu = $_POST['kelurahan'];
    $biayaRadiusDua = $_POST['kelurahan_dua'];
    //var_dump($biayaRadiusSatu);
    //var_dump($biayaRadiusDua);
    # cek ada pilihan atau tidak
    if ($biayaRadiusSatu == 'pilih' || $biayaRadiusDua == 'pilih') {
        $totalBiayaSidang = "Tidak bisa dihitung, karena Anda belum memilih Kelurahan Suami/Istri !";
    } else {
        //cegah radius dua ganguan
        # cek jenis
        $jenis = $_POST['jenis'];
        //var_dump($jenis);
        if ($jenis == 'talak_murni') {
            # ini hitungan untuk talak murni
            $gugatan = 'Cerai Talak diajukan Suami';
            $biayaSidang = ($biayaRadiusSatu * 2) + ($biayaRadiusDua * 3)  + 80000;
            $totalBiayaSidang = 'Rp. ' . number_format($biayaSidang, 0, ',', '.') . ',-';
        }
        if ($jenis == 'gugat_murni') {
            # ini hitungan untuk gugat murni
            $gugatan = 'Cerai Gugat diajukan Istri';
            $biayaSidang = $biayaRadiusSatu + ($biayaRadiusDua * 3)  + 80000;
            $totalBiayaSidang = 'Rp. ' . number_format($biayaSidang, 0, ',', '.') . ',-';
        }
    }
}
if (isset($_POST['kelurahan'])) {
    # code...
    $biayaRadiusSatu = $_POST['kelurahan'];
    //var_dump($biayaRadiusSatu);
    # cek ada pilihan atau tidak
    if ($biayaRadiusSatu == 'pilih') {
        $totalBiayaSidang = "Tidak bisa dihitung, karena Anda belum memilih Kelurahan Suami/Istri !";
    } else {
        //cegah radius dua ganguan
        # cek jenis
        $jenis = $_POST['jenis'];
        //var_dump($jenis);
        if ($jenis == 'talak_ecourt') {
            # ini hitungan talak_ecourt
            $gugatan = 'Cerai Talak diajukan Suami via e-court';
            $biayaSidang = ($biayaRadiusSatu * 4) + 80000;
            $totalBiayaSidang = 'Rp. ' . number_format($biayaSidang, 0, ',', '.') . ',-';
        }
        if ($jenis == 'gugat_ecourt') {
            # ini hitungan untuk gugat ecourt
            $gugatan = 'Cerai Gugat diajukan Istri via e-court';
            $biayaSidang = ($biayaRadiusSatu * 3) + 80000;
            $totalBiayaSidang = 'Rp. ' . number_format($biayaSidang, 0, ',', '.') . ',-';
        }
    }
} else {
    $totalBiayaSidang = "Tidak bisa dihitung, karena Anda belum memilih Kelurahan Suami/Istri !";
}

//var_dump($gugatan);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Panjar Mandiri</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <!-- bootstrap select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>  -->
            <a href="index.php" class="text-decoration-none">
                <h4 class="text-white">Panjar Mandiri</h4>
            </a>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Hasil Hitung Panjar</div>
                    <p class="text-center">Total biaya Panjar untuk <?= $gugatan ?> diperkirakan</p>
                    <h4 class="text-center"><?= $totalBiayaSidang; ?></h4>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row mt-3 justify-content-center">
                <div class="col-lg-6">

                    <!-- start content -->

                    <div class="card">
                        <div class="card-header">
                            Rincian Biaya
                        </div>
                        <div class="card-body text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Biaya Proses</td>
                                        <td>Rp. 70.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Meterai</td>
                                        <td>Rp. 10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Panggilan</td>
                                        <td>Rp. <?php
                                                $biayapanggilan = $biayaSidang != 0 ? $biayaSidang - 80000 : $biayaSidang;
                                                echo number_format($biayapanggilan, 0, ',', '.') ?>,-</td>
                                    </tr>
                                    <tr>
                                        <td>Total Biaya</td>
                                        <td class="font-weight-bold"><?= $totalBiayaSidang ?></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block mt-3" value="Go Back" onclick="history.back(-1)">Kembali</button>

                    <!-- end content -->



                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
        <defs>
            <style>
                .cls-2 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>footer-frame</title>
        <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)" />
    </svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Tentang Panjar Mandiri</h4>
                        <p class="p-small">Aplikasi ini sebagai bentuk inovasi dalam rangkaian mempermudah para pihak berperkara di Pengadilan Agama
                        </p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Survei Layanan Kami di <a class="white" href="https://sikemas.pa-bitung.go.id">SIKEMAS</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Kunjungi Pula <a class="white" href="https://sipp.pa-bitung.go.id">SIPP WEB</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Kel. Manembo-nembo, Kec. Matuari - <br> Kota Bitung 95524</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:pengadilanagamabitung@yahoo.co.id">email</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.pa-bitung.go.id</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="#">Template by Inovatik</a><br>
                        Distributed By <a href="#" target="_blank">ThemeWagon || Edited by Sasaja</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!--jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <!-- bootstrap select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- myjs -->
    <script src="js/my.js"></script> <!-- Custom scripts -->


</body>

</html>