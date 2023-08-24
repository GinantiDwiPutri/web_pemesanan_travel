<div class="modal modal-blur fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="heading"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="users/store" method="POST">
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="displayName" class="form-label">Nama<span class="text-danger">*</span></label>
                        <input id="displayName" name="display_name" type="text" placeholder="Nama Lengkap"
                            class="form-control">
                        <span id="displayNameError" class="invalid-feedback"></span>
                    </div>
                    <label>Nomor Handphone<span class="text-danger">*</span></label>
                    <div class="form-group mb-2">
                        <input id="phoneNumber" type="text" name="phone_number" placeholder="08xxxxxxx"
                            class="form-control bg-secondary-subtle" readonly>
                        <span id="phoneNumberError" class="invalid-feedback"></span>
                    </div>
                    <label>Email<span class="text-danger">*</span></label>
                    <div class="form-group mb-2">
                        <input id="email" type="text" name="email" placeholder="nama@email.com"
                            class="form-control">
                        <span id="emailError" class="invalid-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button id="submit" type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
