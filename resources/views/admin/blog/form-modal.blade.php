@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote.min.css') }}">
@endpush

@section('content')
    <form id="form" action="{{ url('blogs/store') }}" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ empty($blog->id) ? null : $blog->id }}">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col-6">
                        <h2 class="page-title">
                            Buat Blog
                        </h2>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary float-end">
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
                        <div class="mb-2">
                            <label for="title" class="form-label">Gambar Thumbnail</label>
                            <input type="hidden" name="hidden_image"
                                value="{{ empty($blog->image) ? null : $blog->image }}">
                            <input id="image" type="file" class="dropify" name="image"
                                data-default-file="{{ empty($blog->image) ? null : asset($blog->image) }}"
                                data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                        </div>
                        <div class="mb-2">
                            <label for="title" class="form-label">
                                Judul<strong class="text-danger" title="Wajib Diisi">*</strong>
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Judul Berita" value="{{ empty($blog->title) ? null : $blog->title }}">
                            <span id="titleError" class="invalid-feedback"></span>
                        </div>

                        <div class="mb-2">
                            <label for="body" class="form-label">
                                Isi<strong class="text-danger" title="Wajib Diisi">*</strong> <span id="bodyError"
                                    class="text-danger" style="font-size: 12px;"></span>
                            </label>
                            <textarea id="body" name="body" class="summernote">{{ empty($blog->body) ? null : $blog->body }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <script src="{{ asset('plugins/summernote/dist/summernote.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            var Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
            });

            var dropify = $('.dropify').dropify({
                messages: {
                    default: 'Klik atau seret gambar ke sini',
                    replace: 'Klik atau seret untuk mengubah gambar',
                    remove: 'Hapus',
                    error: 'Oops, Terjadi Kesalahan'
                },
            });

            var summernote = $('.summernote').summernote({
                toolbar: [
                    ['fontstyle', ['fontname', 'fontsize', 'bold', 'italic', 'underline',
                        'strikethrough', 'superscript', 'subscript', 'deleteallformat'
                    ]],
                    ['para', ['style', 'ul', 'ol', 'paragraph', 'height']],
                    ['misc', ['undo', 'redo', 'codeview']],
                ]
            });

            dropify.on("dropify.afterClear", function() {
                $("#hiddenImage").val("");
            });

            $("#form").on("submit", function(e) {
                e.preventDefault();
                $("#hiddenBody").val($("#body").html());

                $.ajax({
                    method: "POST",
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#title").removeClass('is-invalid');
                        $("#categoryId").removeClass('is-invalid');
                        $("#bodyError").html("");

                        $("#button").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
                        );
                    },
                    success: function(response) {
                        Swal.fire({
                            type: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonColor: "#59C4BC",
                            confirmButtonText: "Lanjut",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                window.location.href = "/blogs";
                            }
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        $("#button").html("Simpan");

                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#titleError").html(responseError["title"]);
                            $("#categoryError").html(responseError["category_id"]);
                            $("#bodyError").html(responseError["body"]);

                            if (responseError["title"]) {
                                $("#title").addClass('is-invalid').focus();
                            }

                            if (responseError["category_id"]) {
                                $("#categoryId").addClass('is-invalid');
                            }
                        }
                    },
                });
            });
        });
    </script>
@endpush
