@extends('admin.template.base')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 order-md-1">
                    <h3>Data Perusahaan</h3>
                    <p class="text-subtitle text-muted">untuk perusahaan yang terdaftar di aplikasi berangkut</p>
                </div>
                <div class="col-12 col-md-6 order-md-2">
                    <button id="createButton" class="btn btn-primary float-end mb-2"><span>Tambah</span></button>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-responsive" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </section>
    </div>

    @include('admin.company.form-modal')
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('assets/js/pages/crud-company.js') }}"></script>
@endpush
