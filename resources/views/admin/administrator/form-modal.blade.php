<div class="modal modal-blur fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="heading" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="administrators/store" method="POST" enctype="multipart/form-data">
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group mb-2">
                                <label for="photo" class="form-label">Foto</span></label>
                                <input id="hiddenPhoto" type="hidden" name="hidden_photo">
                                <input id="photo" type="file" class="dropify" name="photo"
                                    data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Nama Lengkap"
                                    class="form-control">
                                <span id="nameError" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="username" class="form-label">Username<span
                                        class="text-danger">*</span></label>
                                <input id="username" type="text" name="username" placeholder="Username"
                                    class="form-control">
                                <span id="usernameError" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="phoneNumber" class="form-label">Nomor Handphone<span
                                        class="text-danger">*</span></label>
                                <input id="phoneNumber" type="number" name="phone_number" placeholder="08xxxxxxx"
                                    class="form-control">
                                <span id="phoneNumberError" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="level" class="form-label">Level<span class="text-danger">*</span></label>
                                <select id="level" name="level" class="form-control">
                                    <option value="" selected hidden disabled>*Pilih Level</option>
                                    <option value="admin">Admin</option>
                                    <option value="super-admin">Super Admin</option>
                                </select>
                                <span id="levelError" class="invalid-feedback"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button id="submit" class="btn btn-primary">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
