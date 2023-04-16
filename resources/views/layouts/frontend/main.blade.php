<!DOCTYPE html>
<html lang="en">
<?php $setting = App\Models\Setting::first(); ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $setting->name }}</title>
    <meta name="description" content="Singgasana Sports and Recreation Centre Adalah sarana olah raga dan rekreasi keluarga terletak di kawasan exclusive Permukiman Singgasana Pradana – Bandung. Terdapat fasilitas olahraga dan sarana rekreasi untuk warga sekitar & masyarakat luas. Fasilitas tersebut antara lain : Lapangan Tenis Indoor, Basket Indoor, Squash, Tenis Meja, Badminton, Batting Practice, Fitness, Aerobic, Steam, Whirlpool, Jujitsu, Archery, Sport Shop, Swimming Pool, Auditorium, Function Room, dan Pool Side Cafe. " />
    <meta name="keywords" content="singgasana, sports, recreation center, rekreasi, olahraga, tempat olahraga, rekreasi keluar, beladiri, bandung, jawa barat, tenis indoor, renang, basket indoor, xquash, tenis meja, badminton, batting practice, fitness, aerobic, steam, whirlpool, jujitsu, archery, sport shop, swimming pool, auditorium, function room, pool side cafe." />
    <meta name="author" content="Singgasana Sports and Recreation Centre" />
    <meta name="email" content="singgasanasnr@gmail.com" />
    <meta name="website" content="http://singgasanasports-recreationcentre.com" />
    <meta name="Version" content="v1.0.0" />

    <!-- Favicons -->
    <link href="{{ asset('storage/setting/' . $setting->favicon) }}" rel="icon">
    <link href="{{ asset('storage/setting/' . $setting->favicon) }}" rel="apple-touch-icon">

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
            <img src="{{ asset('frontend') }}/assets/img/Logo-SSRC-cut.webp" alt="">
            {{--            <span>Singgasana Sports</span>--}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('/') }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="{{ route('pages.index', 'tentang-kami') }}">Tentang Kami</a></li>
                      <li class="dropdown"><a href=""><span>Aktifitas</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li><a href="{{ route('pages.index', 'singgasana-swimming-club') }}">Singgasana Swimming Club</a></li>
                          <li><a href="{{ route('pages.index', 'aerobik-seni-bela-diri') }}">Aerobik & Seni Bela Diri</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('gallery.index') }}">Galeri</a></li>
                    </ul>
                  </li>
                </li>
                <li class="dropdown"><a href=""><span>Fasilitas</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('facilities.index', 'whirlpool-steam') }}">Whirlpool & Steam</a></li>
                        <li><a href="{{ route('facilities.index', 'auditorium-function-room') }}">Auditorium & Function Room</a></li>
                        <li><a href="{{ route('facilities.index', 'pool-side-cafe-kantin') }}">Pool Side Café & Kantin</a></li>
                        <li><a href="{{ route('facilities.index', 'aerobik') }}">Aerobik</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Bagian Olahraga</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('pages.index', 'kolam-renang') }}">Kolam Renang</a></li>
                        <li><a href="{{ route('pages.index', 'badminton-basket') }}">Badminton & Basket</a></li>
                        <li><a href="{{ route('pages.index', 'tenis-indoor') }}">Tenis Indoor</a></li>
                        <li><a href="{{ route('pages.index', 'tenis-meja') }}">Tenis Meja</a></li>
                        <li><a href="{{ route('pages.index', 'squash') }}">Squash</a></li>
                        <li><a href="{{ route('pages.index', 'batting-practice') }}">Batting Practice</a></li>
                        <li><a href="{{ route('pages.index', 'fitness') }}">Fitness</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('blog.index') }}">Blog</a></li>
                <li><a class="nav-link scrollto" href="#">Keanggotaan</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact.index') }}">Kontak Kami</a></li>
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
                        <img src="{{ asset('storage/setting/' . $setting->logo) }}" alt="logo">

                    </a>
                    <?php $page = App\Models\Page::where('slug', 'tentang-kami')->first(); ?>
                    <p>{!! Str::limit($page->content, $limit = 650, $end = '...') !!}</p>
                    <div class="social-links mt-3">
                        <a href="http://twitter.com/sngsportscentre" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="http://facebook.com/SinggasanaSportsandRecreationCentre" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="http://instagram.com/singgasanasportsandrecreation" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Tautan</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('/') }}">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('pages.index', 'tentang-kami') }}">Tentang Kami</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#fasilitas">Keanggotaan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contact.index') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Fasilitas</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ route('facilities.index', 'whirlpool-steam') }}">Whirlpool & Steam</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ route('facilities.index', 'auditorium-function-room') }}">Auditorium & Function Room</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ route('facilities.index', 'pool-side-cafe-kantin') }}">Pool Side Café & Kantin</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ route('facilities.index', 'aerobik') }}">Aerobik</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        {{ $setting->address1 }}
                        <strong>Phone:</strong>
                        <p>P : {{ $setting->telephone1 }} <br>F : {{ $setting->telephone2 }}</p><br>
                        <strong>Email:</strong> {{ $setting->email }}<br>
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
