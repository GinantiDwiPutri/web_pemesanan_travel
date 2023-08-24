@php
    $web = App\Models\WebConfig::first();
@endphp

<footer class="p_relative">
    <div class="footer__middle  p_relative d_block">
        <div class="container">
            <div class="footer__middle__content">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 footer_column">
                        <div class="footer_widget left">
                            <div class="footer__logo">
                                <figure>
                                    <img src="{{ asset('assets-landing/images/footer-logo.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="widget_content">
                                <p>{{ $web->short_about }}</p>
                            </div>
                            <div class="banner-media footer-media">
                                <p>Sosial Media:</p><br>
                                <ul>
                                    @if ($web->facebook)
                                        <li>
                                            <a href="{{ $web->facebook }}" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($web->instagram)
                                        <li>
                                            <a href="{{ $web->instagram }}" target="_blank">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($web->phone)
                                        <li>
                                            <a href="https://wa.me/{{ $web->phone }}" target="_blank">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 footer_column">
                        <div class="footer_widget links_widget ml_100">
                            <div class="widget_title">
                                <h4>Informasi Lainnya</h4>
                            </div>
                            <div class="widget_content">
                                <ul class="links_list clearfix">
                                    <li><a href="{{ url('privacy-policy') }}" target="_blank">Kebijakan Privasi</a></li>
                                    <li><a href="{{ url('terms-and-conditions') }}" target="_blank">Ketentuan Layanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom p_relative">
        <div class="auto_container">
            <div class="bottom_inner  p_relative">
                <div class="copyright">
                    <p>Hak Cipta © 2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>
