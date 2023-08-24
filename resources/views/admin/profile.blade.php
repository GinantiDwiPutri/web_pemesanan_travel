@extends('admin.template.base')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col-6">
                    <h2 class="page-title">
                        Profil Saya
                    </h2>
                </div>
                <div class="col-6 btn-group">
                    <button class="btn btn-dark float-end" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                            <path d="M16 5l3 3"></path>
                        </svg>
                        <span>Edit Profil</span>
                    </button>
                    <button class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z">
                            </path>
                            <path d="M15 9h.01"></path>
                        </svg>
                        <span>Ganti Password</span>
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
                        <div class="col-3">
                            <img src="{{ asset(empty(Auth::user()->photo) ? 'assets-admin/static/anonim.png' : Auth::user()->photo) }}"
                                height="100" class="img-fluid">
                        </div>
                        <div class="col-9 px-4 py-4">
                            <p>Nama Lengkap: <strong>{{ Auth::user()->name }}</strong></p>
                            <p>Username: <strong>{{ Auth::user()->username }}</strong></p>
                            <p>Nomor Handphone: <strong>{{ Auth::user()->phone_number }}</strong></p>
                            <p>Level: <strong>{{ Auth::user()->level }}</strong></p>
                            <p>Dibuat Pada: <strong>{{ Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</strong></p>
                            <p>Diedit Pada: <strong>{{ Carbon\Carbon::parse(Auth::user()->updated_at)->diffForHumans() }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="editProfileModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="heading" class="modal-title">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editProfileForm" action="edit-profile" method="POST" enctype="multipart/form-data">
                    <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="photo" class="form-label">Foto</span></label>
                                    <input id="hiddenPhoto" type="hidden" name="hidden_photo">
                                    <input id="photo" type="file" class="dropify" name="photo"
                                        data-default-file="{{ empty(Auth::user()->photo) ? null : asset(Auth::user()->photo) }}"
                                        data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-2">
                                    <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                                    <input id="name" name="name" type="text" placeholder="Nama Lengkap"
                                        class="form-control" value="{{ Auth::user()->name }}">
                                    <span id="nameError" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="username" class="form-label">Username<span
                                            class="text-danger">*</span></label>
                                    <input id="username" type="text" name="username" placeholder="Username"
                                        class="form-control" value="{{ Auth::user()->username }}">
                                    <span id="usernameError" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="phoneNumber" class="form-label">Nomor Handphone<span
                                            class="text-danger">*</span></label>
                                    <input id="phoneNumber" type="number" name="phone_number" placeholder="08xxxxxxx"
                                        class="form-control" value="{{ Auth::user()->phone_number }}">
                                    <span id="phoneNumberError" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button id="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="heading" class="modal-title">Ganti Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="changePasswordForm" action="change-password" method="POST">
                    <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="oldPassword" class="form-label">
                                Kata Sandi Lama<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="oldPassword" name="old_password"
                                placeholder="Kata Sandi Lama">
                            <span id="oldPasswordError" class="invalid-feedback"></span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="newPassword" class="form-label">
                                Kata Sandi Baru<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="newPassword" name="new_password"
                                placeholder="Kata Sandi Baru">
                            <span id="newPasswordError" class="invalid-feedback"></span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="confirmPassword" class="form-label">
                                Konfirmasi Kata Sandi<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirm_password"
                                placeholder="Konfirmasi Kata Sandi">
                            <span id="confirmPasswordError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button id="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
@endpush
