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
            <h3>Explore New York's Hippest Borough</h3>
        </div>
    </section>
    <!-- common banner -->

    <!-- destination details -->
    <section class="destination-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="destination-details-left-container">
                        <div class="blog-details-image">
                            <a href="blog.html"><img src="assets/images/banner/common-banner-03.jpg" alt="image"></a>
                        </div>
                        <div class="footer-info blog-details-info">
                            <ul>
                                <li><i class="fa-regular fa-user"></i> Authore</li>
                                <li><i class="fa-regular fa-calendar"></i> <span> 12 / 12 / 2023</span></li>
                            </ul>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some injected or words which don’t look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in
                            the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            chunks as necessary, making this the first true generator on the Internet. It uses a dictionary
                            of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                            Ipsum which looks reasonable.</p>
                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into unchanged. Lorem Ipsum passages publishing.</p>
                        <div class="dd-image-container">
                            <div class="blog-details-bottom-image">
                                <a href="blog.html"><img src="assets/images/gallery/blog-details-01.png" alt="image"></a>
                            </div>
                            <div class="blog-details-bottom-image">
                                <a href="blog.html"><img src="assets/images/gallery/blog-details-02.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="blog-details-cms">
                            <div class="quotetion">
                                <img src="assets/images/icons/quotetion.png" alt="mark">
                            </div>
                            <h4>By cmshaper</h4>
                            <p>Morbi vel nulla arcu. Duis venenatis est sit amet tempus fringilla. Nulla facilisi.
                                Pellentesque habitant morbi tristiquelkor senectus et netus et malesuada fames ac turpis
                                egestas. Praesent commodo dapibus massa.</p>
                        </div>

                        <div class="blog-details-network">
                            <div class="blog-details-tag">
                                <h5>Related Tags:</h5>
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Sell</a></li>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">UX</a></li>
                                </ul>
                            </div>
                            <div class="blog-details-media">
                                <h5>Social Network:</h5>
                                <ul>
                                    <li><a href="#0"><svg width="30" height="30" viewBox="0 0 30 30"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="media"
                                                    d="M22.5 2.49951H18.75C17.0924 2.49951 15.5027 3.15799 14.3306 4.33009C13.1585 5.5022 12.5 7.09191 12.5 8.74951V12.4995H8.75V17.4995H12.5V27.4995H17.5V17.4995H21.25L22.5 12.4995H17.5V8.74951C17.5 8.41799 17.6317 8.10005 17.8661 7.86563C18.1005 7.63121 18.4185 7.49951 18.75 7.49951H22.5V2.49951Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                    </li>
                                    <li><a href="#0"><svg width="30" height="30" viewBox="0 0 30 30"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="media"
                                                    d="M28.75 3.75012C27.553 4.59447 26.2276 5.24026 24.825 5.66262C24.0722 4.79701 23.0717 4.18348 21.9588 3.90503C20.8459 3.62657 19.6744 3.69661 18.6026 4.10569C17.5308 4.51476 16.6106 5.24312 15.9662 6.19226C15.3219 7.14141 14.9846 8.26554 15 9.41262V10.6626C12.8033 10.7196 10.6266 10.2324 8.66376 9.24443C6.70093 8.25647 5.0129 6.79841 3.75 5.00012C3.75 5.00012 -1.25 16.2501 10 21.2501C7.42566 22.9976 4.35895 23.8738 1.25 23.7501C12.5 30.0001 26.25 23.7501 26.25 9.37512C26.2488 9.02694 26.2154 8.67961 26.15 8.33762C27.4258 7.07949 28.326 5.49101 28.75 3.75012Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                    </li>
                                    <li><a href="#0"><svg width="30" height="30" viewBox="0 0 30 30"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="media"
                                                    d="M21.25 2.49951H8.75C5.29822 2.49951 2.5 5.29773 2.5 8.74951V21.2495C2.5 24.7013 5.29822 27.4995 8.75 27.4995H21.25C24.7018 27.4995 27.5 24.7013 27.5 21.2495V8.74951C27.5 5.29773 24.7018 2.49951 21.25 2.49951Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                                <path class="media"
                                                    d="M20.0006 14.2124C20.1549 15.2527 19.9772 16.3152 19.4928 17.2487C19.0084 18.1822 18.242 18.9392 17.3026 19.412C16.3632 19.8848 15.2987 20.0494 14.2603 19.8823C13.222 19.7152 12.2628 19.225 11.5192 18.4813C10.7755 17.7377 10.2853 16.7785 10.1182 15.7402C9.95111 14.7018 10.1157 13.6373 10.5885 12.6979C11.0613 11.7585 11.8183 10.9921 12.7518 10.5077C13.6853 10.0233 14.7478 9.84562 15.7881 9.99989C16.8493 10.1572 17.8317 10.6517 18.5902 11.4103C19.3488 12.1688 19.8433 13.1512 20.0006 14.2124Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                                <path class="media" d="M21.875 8.12451H21.8859" stroke="#094174"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                    </li>
                                    <li><a href="#0"><svg width="30" height="30" viewBox="0 0 30 30"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="media"
                                                    d="M20 9.99951C21.9891 9.99951 23.8968 10.7897 25.3033 12.1962C26.7098 13.6027 27.5 15.5104 27.5 17.4995V26.2495H22.5V17.4995C22.5 16.8365 22.2366 16.2006 21.7678 15.7317C21.2989 15.2629 20.663 14.9995 20 14.9995C19.337 14.9995 18.7011 15.2629 18.2322 15.7317C17.7634 16.2006 17.5 16.8365 17.5 17.4995V26.2495H12.5V17.4995C12.5 15.5104 13.2902 13.6027 14.6967 12.1962C16.1032 10.7897 18.0109 9.99951 20 9.99951V9.99951Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                                <path class="media" d="M7.5 11.25H2.5V26.25H7.5V11.25Z" stroke="#094174"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path class="media"
                                                    d="M5 7.49951C6.38071 7.49951 7.5 6.38022 7.5 4.99951C7.5 3.6188 6.38071 2.49951 5 2.49951C3.61929 2.49951 2.5 3.6188 2.5 4.99951C2.5 6.38022 3.61929 7.49951 5 7.49951Z"
                                                    stroke="#094174" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="accordion">
                            <h4>3 Comments</h4>
                            <div class="card">
                                <div class="card-footer">
                                    <div class="card-footer-left">
                                        <img src="assets/images/gallery/comments-01.png" alt="">
                                    </div>
                                    <div class="card-footer-right">
                                        <h5>William Cobus <span>June 14, 2021 [11.20am]</span></h5>
                                        <p>Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl
                                            pretium eu. Sed vulputate leo ac porta eleifend. mamnunkhan40@gmail.com</p>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                                        <i class="fa-solid fa-share"></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <div class="coment-title">
                                            <h4>Post Comment </h4>
                                        </div>
                                        <div class="destination-form-container">
                                            <form>
                                                <input type="text" placeholder="Your name">
                                                <input type="text" placeholder="Your phone">
                                            </form>
                                            <form>
                                                <input type="text" placeholder="Your subject" class="subject">
                                            </form>
                                            <form>
                                                <textarea placeholder="Write your Question"></textarea>
                                            </form>
                                            <form>
                                                <button type="submit" class="submit">Seand now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-middle">
                                <div class="card-footer">
                                    <div class="card-footer-left">
                                        <img src="assets/images/gallery/comments-02.png" alt="">
                                    </div>
                                    <div class="card-footer-right">
                                        <h5>Jane Watson <span>June 14, 2021 [11.20am]</span></h5>
                                        <p>Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl
                                            pretium eu. mamnunkhan40@gmail.com</p>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree">
                                        <i class="fa-solid fa-share"></i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <div class="coment-title">
                                            <h4>Post Comment </h4>
                                        </div>
                                        <div class="destination-form-container">
                                            <form>
                                                <input type="text" placeholder="Your name">
                                                <input type="text" placeholder="Your phone">
                                            </form>
                                            <form>
                                                <input type="text" placeholder="Your subject" class="subject">
                                            </form>
                                            <form>
                                                <textarea placeholder="Write your Question"></textarea>
                                            </form>
                                            <form>
                                                <button type="submit" class="submit">Seand now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-footer">
                                    <div class="card-footer-left">
                                        <img src="assets/images/gallery/comments-01.png" alt="">
                                    </div>
                                    <div class="card-footer-right">
                                        <h5>William Cobus <span>June 14, 2021 [11.20am]</span></h5>
                                        <p>Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl
                                            pretium eu. Sed vulputate leo ac porta eleifend. mamnunkhan40@gmail.com</p>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour">
                                        <i class="fa-solid fa-share"></i>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <div class="coment-title">
                                            <h4>Post Comment </h4>
                                        </div>
                                        <div class="destination-form-container">
                                            <form>
                                                <input type="text" placeholder="Your name">
                                                <input type="text" placeholder="Your phone">
                                            </form>
                                            <form>
                                                <input type="text" placeholder="Your subject" class="subject">
                                            </form>
                                            <form>
                                                <textarea placeholder="Write your Question"></textarea>
                                            </form>
                                            <form>
                                                <button type="submit" class="submit">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="destination-details-right-container">
                        <div class="destination-right-search">
                            <form>
                                <input type="text" placeholder="Search..." name="search">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="destination-right-title">
                            <h4>Travellino Tour List</h4>
                            <div class="destination-right-title-image">
                                <img src="assets/images/shape/title-shape.png" alt="shape">
                            </div>
                        </div>
                        <div class="destination-right-list">
                            <div class="destination-right-list-content">
                                <div class="destination-right-list-image">
                                    <img src="assets/images/gallery/drl-1.png" alt="img">
                                </div>
                                <div class="destination-right-list-info">
                                    <a href="blog.html">Aegean Adventure</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i>4.45 (313 Reviews) </li>
                                        <li><span>From</span>
                                            <h5> $500.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="destination-right-list-content">
                                <div class="destination-right-list-image">
                                    <img src="assets/images/gallery/drl-2.png" alt="img">
                                </div>
                                <div class="destination-right-list-info">
                                    <a href="blog.html">Pramids Of Giza, Egypt.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i>4.45 (313 Reviews) </li>
                                        <li><span>From</span>
                                            <h5> $200.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="destination-right-list-content">
                                <div class="destination-right-list-image">
                                    <img src="assets/images/gallery/drl-3.png" alt="img">
                                </div>
                                <div class="destination-right-list-info">
                                    <a href="blog.html">The Colosseum, Rome.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i>4.45 (313 Reviews) </li>
                                        <li><span>From</span>
                                            <h5> $890.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="destination-right-title">
                            <h4>Travel Categories</h4>
                            <div class="destination-right-title-image">
                                <img src="assets/images/shape/title-shape.png" alt="shape">
                            </div>
                        </div>
                        <div class="destination-category">
                            <ul>
                                <li>
                                    <div class="check-mark">
                                        <img src="assets/images/icons/check.png" alt="check">
                                    </div>
                                    <a href="gallery.html">Adventure (03)</a>
                                </li>
                                <li>
                                    <div class="check-mark">
                                        <img src="assets/images/icons/check.png" alt="check">
                                    </div>
                                    <a href="gallery.html">Family Adventure (03)</a>
                                </li>
                                <li>
                                    <div class="check-mark">
                                        <img src="assets/images/icons/check.png" alt="check">
                                    </div>
                                    <a href="gallery.html">Couple Tour (05)</a>
                                </li>
                                <li>
                                    <div class="check-mark">
                                        <img src="assets/images/icons/check.png" alt="check">
                                    </div>
                                    <a href="gallery.html">Popular Tour’s (03)</a>
                                </li>
                                <li>
                                    <div class="check-mark">
                                        <img src="assets/images/icons/check.png" alt="check">
                                    </div>
                                    <a href="gallery.html">Travel Vaction (03)</a>
                                </li>
                            </ul>
                        </div>

                        <div class="destination-right-title">
                            <h4>Follow us </h4>
                            <div class="destination-right-title-image">
                                <img src="assets/images/shape/title-shape.png" alt="shape">
                            </div>
                        </div>
                        <div class="home-two-banner-media destination-right-media">
                            <ul>
                                <li><a href="0#">FB</a></li>
                                <li><a href="0#">TW</a></li>
                                <li><a href="0#">LI</a></li>
                                <li><a href="0#">IN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- destination details -->
@endsection
