@extends('layouts.frontend.main')

@section('title', 'Singgasana Sports')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="beranda" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Singgasana Sports and Recreation Centre</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Tempat olahraga dan rekreasi terpopuler di Kota Bandung
                        dengan banyak pilihan venue</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('frontend') }}/assets/img/hero-img.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="tentang" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kita</h3>
                            <h2>Singgasana Sports and Recreation Centre.</h2>
                            <p>
                                {!! Str::limit($page->content, $limit = 650, $end = '...') !!}
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('pages.index', 'tentang-kami') }}"
                                   class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Baca Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('frontend') }}/assets/img/background-ssnrc.webp" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Statistik</h2>
                    <p>Berapa banyak angka yang kami peroleh</p>
                </header>

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pengunjung</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Event</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-pin-map-fill" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Lokasi</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Keanggotaan</h2>
                    <p>Ada beberapa jenis keanggotaan yang kami tawarkan dengan periode Keanggotaan 2 bulan, 6 bulan dan
                        12 bulan.</p>
                </header>
                <div class="row gy-4" data-aos="fade-left">
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #07d5c0;" class="card-title">Personal</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/personal.webp" class="card-img-top"
                                 alt="Personal Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">1 Orang (Usia 17 Tahun Ke Atas)</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #65c600;" class="card-title">Couple</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/couple.webp" alt="" class="card-img-top"
                                 alt="Couple Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">
                                    2 Orang (Usia 17 Tahun Ke Atas)<br>
                                    Untuk Paket Keanggotaan Couple Harus Menyertakan Kartu Keluarga
                                </p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff901c;" class="card-title">Triple</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/triple.webp"
                                 class="card-img-top" alt="Triple Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> 3 Orang (2 Orang Dewasa, 1 Orang Usia Dibawah 17 Tahun)<br>
                                    Untuk Paket Keanggotaan Couple Harus Menyertakan Kartu Keluarga</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff0071;" class="card-title">Family</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/family.webp"
                                 class="card-img-top" alt="Family Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> 4 Orang (2 Orang Dewasa, 2 Orang Usia Dibawah 17 Tahun)<br>
                                    Untuk Paket Keanggotaan Family Harus Menyertakan Kartu Keluarga</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #26bf9b;" class="card-title">Student</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/student.webp"
                                 class="card-img-top" alt="Student Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">Untuk Paket Keanggotaan Student Harus Menyertakan Kartu Siswa
                                    / Kartu Mahasiswa
                                    <br>
                                    Periode Keanggotaan Student (2 Bulan & 6 Bulan)</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff901c;" class="card-title">Corporate/Community</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/community.webp"
                                 class="card-img-top" alt="Community Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> Terdiri dari 5 / 10 Orang dalam 1 Group</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="blog" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Postingan Terbaru</p>
                </header>

                <div class="row">

                    @foreach ($recentPosts as $row)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ asset('storage/article/' . $row->image) }}" class="img-fluid" alt="image-blog">
                            </div>
                            <span class="post-date"><i class="bi bi-clock"></i> {{ date('d-M-Y', strtotime($row->created_at)) }}</span>
                            <h3 class="post-title">{{ $row->title }}</h3>
                            <a href="{{ route('blog.single', $row->slug) }}" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@endsection
