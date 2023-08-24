<div class="modal modal-blur fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="heading" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="helps/store" method="POST">
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="title" class="form-label">Judul<span class="text-danger">*</span></label>
                        <input id="title" name="title" type="text" placeholder="Judul" class="form-control">
                        <span id="titleError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="on" class="form-label">Aplikasi<span class="text-danger">*</span></label>
                        <select id="on" name="on" class="form-control">
                            <option value="" selected hidden disabled>*Pilih Aplikasi</option>
                            <option value="Berangkut">Berangkut</option>
                            <option value="Driver Berangkut">Driver Berangkut</option>
                        </select>
                        <span id="onError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="content" class="form-label">Isi<span class="text-danger">*</span></label>
                        <textarea id="content" name="content" rows="5" class="form-control"></textarea>
                        <span id="contentError" class="invalid-feedback"></span>
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
