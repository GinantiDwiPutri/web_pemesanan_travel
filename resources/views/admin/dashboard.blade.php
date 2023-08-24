@extends('admin.template.base')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Beranda
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Reservasi</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $orders_count = 0;
                                    foreach ($orders as $key => $value) {
                                        $orders_count++;
                                    }
                                @endphp
                                {{ $orders_count }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Keberangkatan</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $trips_count = 0;
                                    foreach ($trips as $key => $value) {
                                        $trips_count++;
                                    }
                                @endphp
                                {{ $trips_count }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Rute</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $routes_count = 0;
                                    foreach ($routes as $key => $value) {
                                        $routes_count++;
                                    }
                                @endphp
                                {{ $routes_count }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Driver</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $drivers_count = 0;
                                    foreach ($drivers as $key => $value) {
                                        $drivers_count++;
                                    }
                                @endphp
                                {{ $drivers_count }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Calon Driver</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $registrants_count = 0;
                                    foreach ($registrants as $key => $value) {
                                        $registrants_count++;
                                    }
                                @endphp
                                {{ $registrants_count }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jumlah Pengguna</div>
                            </div>
                            <div class="h1 mb-3">
                                @php
                                    $users_count = 0;
                                    foreach ($users as $key => $value) {
                                        $users_count++;
                                    }
                                @endphp
                                {{ $users_count }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
