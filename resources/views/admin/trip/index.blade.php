@extends('admin.template.base')

@section('content')
    @include('admin.trip.form-modal')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Data Keberangkatan
                    </h2>
                </div>
                <div class="col">
                    <button id="create" class="btn btn-primary float-end">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Rute</th>
                                <th>Tanggal</th>
                                <th>Jam Keberangkatan</th>
                                <th>Harga</th>
                                <th>Driver</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="table-wrapper" class="table-tbody">
                            <tr>
                                <td colspan="5" class="text-center">Mohon Tunggu...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/crud-trip.js') }}"></script>
@endpush
