@extends('admin.template.base')

@section('content')
    @include('admin.help.form-modal')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Data Bantuan / Frequently Asked Question (FAQ)
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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><button class="table-sort" data-sort="sort-name">Pertanyaan</button></th>
                                    <th><button class="table-sort" data-sort="sort-city">Jenis</button></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="table-wrapper" class="table-tbody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/crud-help.js') }}"></script>
@endpush
