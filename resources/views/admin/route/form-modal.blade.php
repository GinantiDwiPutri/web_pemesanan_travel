<div class="modal modal-blur fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="heading" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="routes/store" method="POST">
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="route" class="form-label">Rute<span class="text-danger">*</span></label>
                        <input id="route" name="route" type="text" placeholder="Rute" class="form-control">
                        <span id="titleError" class="invalid-feedback"></span>
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
