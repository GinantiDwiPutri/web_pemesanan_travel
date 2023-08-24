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
                <a href="#" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('assets-admin/static/logo.png') }}" height="36" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Masuk ke akunmu</h2>
                    <form id="form" action="login" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" type="text" name="username" class="form-control">
                            <span id="usernameError" class="invalid-feedback"></span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Kata Sandi
                                <span class="form-label-description">
                                    <a href="{{ asset('forgot-password') }}">Lupa kata sandi?</a>
                                </span>
                            </label>
                            <input id="password" type="password" name="password" class="form-control">
                            <span id="passwordError" class="invalid-feedback"></span>
                        </div>
                        <div class="form-footer">
                            <button id="submit" type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets-admin/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/js/demo.min.js?1684106062') }}" defer></script>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
