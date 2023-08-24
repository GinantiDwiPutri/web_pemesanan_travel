<div class="modal modal-blur fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="heading" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="trips/store" method="POST">
                @csrf
                <input id="id" type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="date" class="form-label">Tanggal<span class="text-danger">*</span></label>
                        <input id="date" name="date" type="date" class="form-control">
                        <span id="dateError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="time" class="form-label">Jam<span class="text-danger">*</span></label>
                        <input id="time" name="time" type="time" class="form-control">
                        <span id="timeError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Harga<span class="text-danger">*</span></label>
                        <input id="price" name="price" type="number" placeholder="Harga" class="form-control">
                        <span id="priceError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="route" class="form-label">Rute<span class="text-danger">*</span></label>
                        <select name="route" id="route" class="form-control">
                            <option value="" selected disabled hidden>*PILIH RUTE</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route['route'] }}">{{ $route['route'] }}</option>
                            @endforeach
                        </select>
                        <span id="routeError" class="invalid-feedback"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="driver" class="form-label">Pilih Driver<span class="text-danger">*</span></label>
                        <select name="driver" id="driver" class="form-control">
                            <option value="" selected disabled hidden>*PILIH DRIVER</option>
                            @foreach ($drivers as $driver)
                                <option value="{{ $driver['phoneNumber'] }}">{{ $driver['displayName'] }}</option>
                            @endforeach
                        </select>
                        <span id="driverError" class="invalid-feedback"></span>
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
