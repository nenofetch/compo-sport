@extends('layouts.frontend.main')

@section('title', 'Singgasana Sports - Blog')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li>Blog</li>
            </ol>
            <h2>Blog</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach ($articles as $row)
                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ asset('storage/article/' . $row->image) }}" alt="image-blog" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{ route('blog.single', $row->slug) }}">{{ $row->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{ $row->user->name }}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="{{ date('d-M-Y', strtotime($row->created_at)) }}">{{ date('d-M-Y', strtotime($row->created_at)) }}</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a>{{ $row->viewers }}</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>{!! Str::limit($row->content, $limit = 700, $end = '...') !!}</p>
                            <div class="read-more">
                            <a href="{{ route('blog.single', $row->slug) }}">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
                    @endforeach

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $row)
                                <li><a href="#">{{ $row->title }} <span>({{ count($row->article) }})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($recentPosts as $row)
                            <div class="post-item clearfix">
                                <img src="{{ asset('storage/article/' . $row->image) }}" alt="image-blog">
                                <h4><a href="{{ route('blog.single', $row->slug) }}">{{ $row->title }}</a></h4>
                                <time datetime="{{ date('d-M-Y', strtotime($row->created_at)) }}">{{ date('d-M-Y', strtotime($row->created_at)) }}</time>
                            </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach ($tags as $tag)
                                <li><a href="">{{ $tag }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection
