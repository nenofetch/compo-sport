@extends('layouts.frontend.main')

@section('title', 'Singgasana Sports - Fasilitas')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('/') }}">Beranda</a></li>
          <li>Fasilitas</li>
        </ol>
        <h2>Fasilitas Detail</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Facility Details Section ======= -->
    <section id="facility-details" class="facility-details">
      <div class="container">

        @foreach ($pages as $row)
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="facility-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @if ($row->images->count() > 0)
                    @foreach ($row->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/page/'.$image->path) }}" alt="image-pages">
                        </div>
                    @endforeach
                @endif

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="facility-description">
              <h2>{{ $row->title }}</h2>
              <p>{!! $row->content !!}</p>
            </div>
          </div>

        </div>
        @endforeach

      </div>
    </section><!-- End Facility Details Section -->

</main><!-- End #main -->
@endsection
