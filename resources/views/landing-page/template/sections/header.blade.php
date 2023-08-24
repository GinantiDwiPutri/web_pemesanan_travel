@php
    function checkActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<header class="main-header style-one common-header">
    <div class="header-lower">
        <div class="header_bottom p_relative">
            <div class="auto_container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets-landing/images/logo.png') }}" alt="Logo Berangkut">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}" class="{{ checkActive('/') }}">Beranda</a></li>
                                    <li><a href="{{ url('about') }}" class="{{ checkActive('about') }}">Tentang
                                            Kami</a>
                                    </li>
                                    <li><a href="{{ url('blogs') }}" class="{{ checkActive('blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('contact') }}" class="{{ checkActive('contact') }}">Kontak </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="header-right-option"></div>
                        <div class="header-right-option"></div>
                        <div class="header__right__button">
                            <button class="btn" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="flaticon-menu-1"></i>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
                                        <img src="{{ asset('assets-landing/images/logo.png') }}" alt="logo">
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="offcanvas-container">
                                        <div class="blog-icon">
                                            <img src="{{ asset('assets-landing/images/icons/blog-icon.png') }}"
                                                alt="icon">
                                        </div>
                                        <p>“ Hubungi sosial media kami jika butuh bantuan ”</p>
                                        <div class="banner-media">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
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

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto_container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('/') }}"><img
                                src="{{ asset('assets-landing/images/logo.png') }}" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
