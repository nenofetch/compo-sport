<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('title')

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('frontend') }}/assets/img/Logo-SSRC-cut.png" alt="">
            {{--            <span>Singgasana Sports</span>--}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="scrollto active" href="#beranda">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#fasilitas">Fasilitas</a></li>

                        <li><a href="#">Bagian Olahraga</a></li>
                        <li><a href="#">Aktifitas</a></li>
                        <li><a href="#">Galeri</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#blog">Blog</a></li>

                {{-- <li><a class="{{Request::is('booking') ? 'active' : ''}}" href="blog.html">Booking</a></li> --}}
                <li><a class="getstarted" href="{{route('login')}}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('frontend') }}/assets/img/Logo-SSRC-cut.png" alt="">

                    </a>
                    <p> Adalah sarana olah raga dan rekreasi keluarga terletak di kawasan exclusive Permukiman
                        Singgasana Pradana – Bandung. Terdapat fasilitas olahraga dan sarana rekreasi untuk
                        warga sekitar & masyarakat luas. Fasilitas tersebut antara lain : Lapangan Tenis Indoor,
                        Basket Indoor, Squash, Tenis Meja, Badminton, Batting Practice, Fitness, Aerobic, Steam,
                        Whirlpool, Jujitsu, Archery, Sport Shop, Swimming Pool, Auditorium, Function Room, dan
                        Pool Side Cafe..</p>
                    <div class="social-links mt-3">
                        <a href="http://twitter.com/sngsportscentre" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="http://facebook.com/SinggasanaSportsandRecreationCentre" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="http://instagram.com/singgasanasportsandrecreation" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#tentang">Tentang</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#fasilitas">Fasilitas</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#blog">Blog</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Venue</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Football Area</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Swimming Area</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Gymnastic Area</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Tennis Area</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Basket Area</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Jl. Galuh Pakuan Barat No. 3 Singgasana Pradana Residence
                        <br>
                        Cibaduyut - Bandung City<br>
                        Indonesia <br><br>
                        <strong>Phone:</strong>
                    <p>P : +62 22 543 6458<br>F : +62 22 543 5868</p><br>
                    <strong>Email:</strong> singgasanasnr@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>
</footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>

</html>
