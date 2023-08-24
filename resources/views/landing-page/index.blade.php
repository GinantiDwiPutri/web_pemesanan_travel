@extends('landing-page.template.base')

@section('content')
    @include('landing-page.template.sections.mobile-menu')

    <!-- banner -->
    <section class="banner">
        <div class="banner-icon1">
            <img src="{{ asset('assets-landing/images/icons/banner-icon-01.png') }}" alt="icon">
        </div>
        <div class="banner-icon2">
            <img src="{{ asset('assets-landing/images/icons/banner-icon-02.png') }}" alt="icon">
        </div>
        <div class="pattern-layer" style="background-image: url(assets-landing/images/shape/map.png);"></div>

        <div class="banner-carousel owl-theme owl-carousel">
            <div class="slide-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-slide">
                                <div class="banner-content">
                                    <div class="banner-content-wrapper">
                                        <div class="banner-content-wrapper-inner">
                                            <h2>Pesan Travel Lebih Mudah Di <span>Berangkut!
                                                    <svg class="banner-text-shape" width="247" height="38"
                                                        viewBox="0 0 247 38" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path id="signature1"
                                                            d="M3.18577 22.2125C3.18577 22.2125 155.675 -3.21963 241.039 14.2277"
                                                            stroke="#FE7524" stroke-width="5" stroke-linecap="round" />
                                                        <path id="signature2"
                                                            d="M3.55141 17.792C3.55141 17.792 158.876 1.54075 243.929 23.8236"
                                                            stroke="#FE7524" stroke-width="5" stroke-linecap="round" />
                                                    </svg>
                                                </span>
                                            </h2>
                                            <p>kenali kami dan perjalanan kami dalam membantu anda.</p>
                                            <div class="banner-btn-media">
                                                <div class="header-link-btn">
                                                    <a href="{{ url('about') }}" class="btn-1">
                                                        Tentang Kami
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-right-content">
                                <div class="banner-right-image">
                                    <img src="{{ asset('assets-landing/images/banner/banner-right-image.png') }}"
                                        alt="banner-two-image">
                                </div>
                                <div class="border-image">
                                    <img src="{{ asset('assets-landing/images/shape/border-image.png') }}" alt="border">
                                </div>
                                <div class="banner-plane">
                                    <img src="{{ asset('assets-landing/images/shape/banner-plan.png') }}" alt="plan">
                                </div>
                                <div class="banner-car">
                                    <img src="{{ asset('assets-landing/images/shape/banner-car.png') }}" alt="car">
                                </div>
                                <div class="banner-vedio">
                                    <div class="banner-vedio-image">
                                        <img src="{{ asset('assets-landing/images/banner/banner-vedio-image.png') }}"
                                            alt="">
                                        <div class="missiom-video-btn">
                                            <a href="https://www.youtube.com/watch?v=kS0X-yIsB64" target="_blank"
                                                class="hv-popup-link"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="banner-blank1"></div>
                                    <div class="banner-blank2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->

    <!-- funfact -->
    <section class="fanfact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-container">
                        <div class="funfact-inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="19">0</span>
                                <span class="count-after">+</span>
                            </div>
                            <p>Driver</p>
                            <h6>Driver Berpengalaman</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funfact-container">
                        <div class="funfact-inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="50">0</span>
                                <span class="count-after">k+</span>
                            </div>
                            <p>Pengguna</p>
                            <h6>Total Pengguna</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funfact-container">
                        <div class="funfact-inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="25">0</span>
                                <span class="count-after">+</span>
                            </div>
                            <p>Rute</p>
                            <h6>Rute Perjalanan Kami</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funfact-container">
                        <div class="funfact-inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="64">0</span>
                                <span class="count-after">+</span>
                            </div>
                            <p>Terselesaikan</p>
                            <h6>Perjalanan Terselesaikan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact -->

    <!-- testimonial -->
    <section class="testimonial" style="margin-top: 30px;">
        <div class="testimonial-container wow fadeInLeftBig" data-wow-delay="00ms" data-wow-duration="2000ms">
            <div class="testimonials-carousel owl-carousel owl-theme">
                @foreach ($testimonies as $testimony)
                    <div class="testimonial-content">
                        <div class="test-bus">
                            <img src="{{ asset('assets-landing/images/shape/bus.png') }}" alt="bus">
                        </div>
                        <h5>#Testimoni</h5>
                        <h4>Pendapat Klien Soal Layanan Kami</h4>
                        <p>“ {{ $testimony->body }} ”</p>
                        <div class="testimonial-info">
                            <div class="testimonial-image">
                                <img
                                    src="{{ asset(empty($testimony->photo) ? 'assets-landing/images/gallery/testimonial-image1.png' : $testimony->photo) }}">
                            </div>
                            <div class="testimonial-rating">
                                <p>{{ $testimony->name }}</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- testimonial -->

    <!-- blog -->
    <section class="blog">
        <div class="blog-icon">
            <img src="{{ asset('assets-landing/images/icons/blog-icon.png') }}" alt="icon">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-title">
                        <h5>Blog</h5>
                        <h3>Blog Terbaru</h3>
                    </div>
                </div>

                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-content wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                            <div class="blog-image">
                                <a href="{{ url('blogs', $blog->slug) }}">
                                    <img
                                        src="{{ asset(empty($blog->image) ? 'assets-landing/images/gallery/blog-01.png' : $blog->image) }}">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="footer-info">
                                    <ul>
                                        <li>
                                            <i class="fa-regular fa-calendar"></i>
                                            <span>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                                        </li>
                                    </ul>
                                    <a href="{{ url('blogs', $blog->slug) }}" class="blog-title">{{ $blog->title }}</a>
                                    <a href="{{ url('blogs', $blog->slug) }}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- blog -->
@endsection
