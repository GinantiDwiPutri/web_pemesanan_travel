@extends('admin.template.base')

@section('content')
    @include('admin.user.form-modal')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="g-2 align-items-center">
                    <h2 class="page-title">
                        Data Akun Pengguna
                    </h2>
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
                                <th>Nama</th>
                                <th>No. Handphone</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="table-wrapper" class="table-tbody">
                            <tr>
                                <td colspan="4" class="text-center">Mohon Tunggu...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/crud-user.js') }}"></script>
@endpush
