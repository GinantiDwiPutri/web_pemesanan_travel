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
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-11.jpg);"></div>

        <div class="common-banner-title">
            <a href="index.html">Home </a>
            <span>/ Contact</span>
            <h3>If you need any help</h3>
        </div>
    </section>
    <!-- common banner -->

    <!-- contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="destination-right-title">
                        <h4>Lets talk!</h4>
                        <p>Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl pretium eu. Sed
                            vulputate leo ac porta eleifend. Pellentesque semper convallis lacus, </p>
                        <div class="contact-page-info">
                            <div class="contact-number">
                                <a href="tel:123456987231" class="contact-number-icon"><i
                                        class="flaticon-phone-call"></i></a>
                                <ul>
                                    <li>
                                        <h6>Call us</h6>
                                    </li>
                                    <li><a href="tel:123456987231 ">+12345 6987 231 </a></li>
                                </ul>
                            </div>
                            <div class="contact-number">
                                <a href="mailto:info@yourmail.com" class="contact-number-icon"><i
                                        class="flaticon-email"></i></a>
                                <ul>
                                    <li>
                                        <h6>E-mail Address</h6>
                                    </li>
                                    <li><a href="mailto:info@yourmail.com">info@yourmail.com </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="destination-right-title">
                        <h4>Send us a message</h4>
                        <p>Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl pretium eu. Sed
                            vulputate leo ac porta eleifend. Pellentesque semper convallis lacus, </p>
                    </div>
                    <div class="destination-form-container">
                        <form>
                            <input type="text" placeholder="Your name">
                            <input type="email" placeholder="Your Email">
                        </form>
                        <form>
                            <input type="text" placeholder="Your subject" class="subject">
                        </form>
                        <form>
                            <textarea placeholder="Write your Question"></textarea>
                        </form>
                        <form class="contact-check">
                            <input type="checkbox" name="contact" value="contact">
                            <label> Save my name, email, and website in this browser for the next time I comment.</label>
                        </form>
                        <form>
                            <button type="submit" class="submit">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- contact map -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.636143012481!2d-111.79711282373526!3d34.865368874358715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872da13b0e9276a3%3A0xbae9d4a12aed0d9!2sSedona%20Village%20Shopping%20Center!5e0!3m2!1sen!2sbd!4v1681226823013!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- contact map -->
@endsection
