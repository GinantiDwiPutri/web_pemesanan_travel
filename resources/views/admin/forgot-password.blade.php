<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | Admin Berangkut</title>

    <link rel="icon" href="{{ asset('assets-admin/static/logo-small.png') }}">

    <!-- CSS files -->
    <link href="{{ asset('assets-admin/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('assets-admin/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('assets-admin/static/logo.png') }}" height="36" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Lupa kata sandimu?</h2>
                    <form id="form" method="POST">
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Nomor Handphone</label>
                            <input id="phoneNumber" type="text" name="phone_number" class="form-control">
                            <span id="phoneNumberError" class="invalid-feedback"></span>
                        </div>
                        <div class="form-footer">
                            <button id="submit" type="submit" class="btn btn-primary w-100">Kirim OTP</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{ url('login') }}">Sudah ingat kata sandimu?</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="otpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">One Time Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="otpForm" method="POST">
                    <input id="token" type="hidden" name="token">
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <input id="otp" name="otp" type="text" placeholder="Masukkan OTP"
                                class="form-control">
                            <span id="otpError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button id="otpSubmit" class="btn btn-primary">
                            Lanjut
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets-admin/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/js/demo.min.js?1684106062') }}" defer></script>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('js/forgot-password.js') }}"></script>
</body>

</html>
