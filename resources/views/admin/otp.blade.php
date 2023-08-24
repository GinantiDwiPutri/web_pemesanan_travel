<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <title>Admin Berangkut</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
    <style>
        .inputs input {
            width: 45px;
            height: 45px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #435ebe
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" height="35px"
                                alt="Logo"><span class="fw-bold fs-4 text-primer ms-2">Ber<span
                                    class="text-second">angkut</span></span></a>
                    </div>
                    <br>
                    <h2>Masukkan OTP</h2>
                    <p>Kami sudah mengirim kode OTP melalui Whatsapp, silahkan masukkan kode yang diberikan.</p>

                    <form id="forgotForm" action="forgot-password/store" method="POST">
                        <div class="container d-flex justify-content-center align-items-center">
                            <div class="position-relative">
                                <div id="otp" class="inputs d-flex">
                                    <input class="text-center form-control rounded" type="text" id="first"
                                        maxlength="1"/>
                                    <input class="text-center form-control rounded" type="text" id="second"
                                        maxlength="1"/>
                                    <input class="text-center form-control rounded" type="text" id="third"
                                        maxlength="1"/>
                                    <input class="text-center form-control rounded" type="text" id="fourth"
                                        maxlength="1"/>
                                    <input class="text-center form-control rounded" type="text" id="fifth"
                                        maxlength="1"/>
                                    <input class="text-center form-control rounded" type="text" id="sixth"
                                        maxlength="1"/>
                                </div>
                            </div>
                        </div>
                        <button id="submit" type="submit"
                            class="mt-3 btn btn-primary btn-block shadow-lg">Lanjut</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/forgot-password-admin.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                        console.log(inputs[1].value);
                    });
                }
            }
            OTPInput();
        });
    </script>
</body>

</html>
