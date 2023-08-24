@extends('admin.template.base')

@section('content')
    <form id="form" action="update-config" method="POST">
        @csrf
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col-6">
                        <h2 class="page-title">
                            Kebijakan Privasi
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
                <textarea id="tinymce-mytextarea" name="privacy_policy" rows="30" class="form-control">{{ $web->privacy_policy }}</textarea>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <!-- Libs JS -->
    <script src="{{ asset('assets-admin/dist/libs/tinymce/tinymce.min.js?1684106062') }}" defer></script>

    <script src="{{ asset('js/update-config.js') }}"></script>

    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            let options = {
                selector: '#tinymce-mytextarea',
                height: 700,
                menubar: false,
                statusbar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
            }
            if (localStorage.getItem("tablerTheme") === 'dark') {
                options.skin = 'oxide-dark';
                options.content_css = 'dark';
            }
            tinyMCE.init(options);
        })
        // @formatter:on
    </script>
@endpush
