<div class="modal fade text-left" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="heading"></h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form" action="companies/store" method="POST">
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <label>Nama Perusahaan<span class="text-danger">*</span></label>
                    <div class="form-group">
                        <input id="name" name="name" type="text" placeholder="Nama Perusahaan"
                            class="form-control">
                        <span id="nameError" class="invalid-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button id="submit" type="submit" class="btn btn-primary ml-1">
                        <span id="buttonText" class="d-none d-sm-block"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
