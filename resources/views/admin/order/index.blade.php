@extends('admin.template.base')

@section('content')
    @include('admin.order.form-modal')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Data Pesanan
                    </h2>
                </div>
                <div class="col">
                    {{-- <button id="create" class="btn btn-primary float-end">Tambah</button> --}}
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
                                <th>Kursi</th>
                                <th>No. Handphone Penumpang</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="table-wrapper" class="table-tbody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/crud-order.js') }}"></script>
@endpush
