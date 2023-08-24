<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets-landing/images/logo.png') }}"
                    alt="logo"></a></div>
        <div class="menu-outer"> </div>
        <div class="contact-info">
            <h4>Kontak</h4>
            <ul>
                <li>{{ App\Models\WebConfig::first()->email }}</li>
            </ul>
        </div>
        <div class="social-links">
            <div class="banner-media">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
