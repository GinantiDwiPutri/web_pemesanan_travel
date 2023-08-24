<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }} - Admin Berangkut</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets-admin/static/logo-small.png') }}">

    <!-- CSS files -->
    <link href="{{ asset('assets-admin/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/jquery-datatable/jquery.dataTables.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>

    @stack('style')
</head>

<body>
    <script src="{{ asset('assets-admin/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('admin.template.sections.header')

        @include('admin.template.sections.navbar')

        <div class="page-wrapper">
            @yield('content')

            @include('admin.template.sections.footer')
        </div>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('assets-admin/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>


    <!-- Tabler Core -->
    <script src="{{ asset('assets-admin/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets-admin/dist/js/demo.min.js?1684106062') }}" defer></script>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
        });
    </script>

    @stack('script')
</body>

</html>
