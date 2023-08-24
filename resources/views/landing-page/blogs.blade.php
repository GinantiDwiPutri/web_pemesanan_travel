@extends('landing-page.template.base')

@section('content')
    <!-- search popup start-->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="flaticon-add"></i></button>
        </div>
        <div class="offcanvas-body">
            <form>
                <input type="search" placeholder="Search...">
                <i class="flaticon-search"></i>
            </form>
        </div>
    </div>
    <!-- search popup end-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="logo"></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                </ul>
            </div>
            <div class="social-links">
                <div class="banner-media">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-10.jpg);"></div>

        <div class="common-banner-title">
            <a href="index.html">Home </a>
            <span>/ Blog</span>
            <h3>Get Know Travel Experience</h3>
        </div>
    </section>
    <!-- common banner -->

    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <img src="assets/images/gallery/blog-01.png" alt="image">
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">Explore New York's Hippest <br> Borough</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <img src="assets/images/gallery/blog-02.png" alt="image">
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">How To Get The Most Out of Senior
                                    Travelar</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <img src="assets/images/gallery/blog-03.png" alt="image">
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">Jungles In Paris Vermont’s ugged, Retro Ski
                                    Mountain</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/gallery/blog-04.png" alt="image"></a>
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">Explore New York's Hippest <br> Borough</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/gallery/blog-05.png" alt="image"></a>
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">How To Get The Most Out of Senior
                                    Travelar</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-content">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/gallery/blog-06.png" alt="image"></a>
                        </div>
                        <div class="blog-info">
                            <div class="footer-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> Authore</li>
                                    <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                                </ul>
                                <a href="blog-details.html" class="blog-title">Jungles In Paris Vermont’s ugged, Retro Ski
                                    Mountain</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->
@endsection
