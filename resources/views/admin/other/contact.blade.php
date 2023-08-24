@extends('admin.template.base')

@section('content')
    <form id="form" action="contact-update" method="POST">
        @csrf
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col-6">
                        <h2 class="page-title">
                            Kontak
                        </h2>
                    </div>
                    <div class="col-6">
                        <button id="submit" type="submit" class="btn btn-primary float-end">
                            <span>Simpan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input id="email" type="text" name="email" class="form-control"
                                        value="{{ $web->email }}">
                                    <span id="emailError" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="phone" class="form-label">Nomor Whatsapp</label>
                                    <input id="phone" type="text" name="phone" placeholder="Nomor Whatsapp"
                                        value="{{ empty($web->phone) ? null : $web->phone }}" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="about" class="form-label">Deskripsi Pendek<span
                                            class="text-danger">*</span></label>
                                    <textarea name="about" id="about" rows="5" class="form-control">{{ $web->short_about }}</textarea>
                                    <span id="emailError" class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="facebook" class="form-label">URL Facebook</label>
                                    <input id="facebook" type="text" name="facebook" placeholder="URL Facebook"
                                        class="form-control" value="{{ empty($web->facebook) ? null : $web->facebook }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="instagram" class="form-label">URL Instagram</label>
                                    <input id="instagram" type="text" name="instagram" placeholder="URL Instagram"
                                        class="form-control" value="{{ empty($web->instagram) ? null : $web->instagram }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <script src="{{ asset('js/update-config.js') }}"></script>
@endpush
