function clearForm() {
    $("#id").val("");
    $("#name").removeClass("is-invalid").val("");
    $("#phoneNumber").removeClass("is-invalid").val("");
    $("#username").removeClass("is-invalid").val("");
    $("#level").removeClass("is-invalid").val("");

    var dropify = $("#photo").dropify({
        defaultFile: null,
    });

    dropify = dropify.data("dropify");
    dropify.resetPreview();
    dropify.clearElement();
    dropify.settings.defaultFile = null;
    dropify.destroy();
    dropify.init();
}

$(document).ready(function(){
    var Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
    });

    var dropify = $("#photo").dropify({
        messages: {
            default: "Klik atau seret gambar ke sini",
            replace: "Klik atau seret untuk mengubah gambar",
            remove: "Hapus",
            error: "Oops, Terjadi Kesalahan",
        },
    });

    dropify.on("dropify.afterClear", function () {
        $("#hiddenPhoto").val("");
    });

    table = $("#table").DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        autoWidth: false,
        responsive: true,
        ajax: "administrators/json",
        columns: [
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
                class: "text-center",
            },
            {
                data: "name",
                name: "name",
            },
            {
                data: "username",
                name: "username",
            },
            {
                data: "phone_number",
                name: "phone_number",
            },
        ],
        oLanguage: {
            sSearch: "Pencarian",
            sInfoEmpty: "Data Belum Tersedia",
            sInfo: "Menampilkan _PAGE_ dari _PAGES_ halaman",
            sEmptyTable: "Data Belum Tersedia",
            sLengthMenu: "Tampilkan _MENU_ Baris",
            sZeroRecords: "Data Tidak Ditemukan",
            sProcessing: "Sedang Memproses...",
            oPaginate: {
                sFirst: "Pertama",
                sPrevious: "Sebelumnya",
                sNext: "Selanjutnya",
                sLast: "Terakhir",
            },
        },
    });

    $("#createButton").click(function () {
        $("#formModal").modal("show");
        $("#heading").html("Tambah Data");
        $("#submit").html("Tambah").removeClass("btn-warning");
        clearForm();
    });

    // untuk membuat kolom input nama terfokus ketika modal pertama kali muncul
    $("#formModal").on("shown.bs.modal", function () {
        $("#name").focus();
    });

    $("body").on("click", ".edit", function () {
        $.ajax({
            url: "administrators/check",
            method: "POST",
            data: {
                id: $(this).data("id"),
            },
            success: function (response) {
                if (response.status == 201) {
                    $("#formModal").modal("show");
                    $("#heading").html("Sunting Data");
                    $("#submit").html("Simpan").addClass("btn-warning");
                    clearForm();

                    $("#id").val(response.data.id);
                    $("#name").val(response.data.name);
                    $("#username").val(response.data.username);
                    $("#phoneNumber").val(response.data.phone_number);
                    $("#level").val(response.data.level);

                    var dropify = $("#photo").dropify({
                        defaultFile: response.data.photo,
                    });

                    dropify = dropify.data("dropify");
                    dropify.resetPreview();
                    dropify.clearElement();
                    dropify.settings.defaultFile = response.data.photo;
                    dropify.destroy();
                    dropify.init();
                }
            },
        });
    });

    $("body").on("click", ".delete", function () {
        if (confirm("Yakin ingin menghapus data?") === true) {
            $.ajax({
                url: "administrators/destroy",
                method: "DELETE",
                data: {
                    id: $(this).data("id"),
                },
                success: function (response) {
                    if (response.status == 201) {
                        Toast.fire({
                            type: "success",
                            title: "Berhasil!\n" + response.message,
                        });

                        table.draw();
                    }
                },
            });
        }
    });

    // fungsi untuk mengirim data dari formulir ke database
    $("#form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            dataType: "json",
            contentType: false,
            beforeSend: function () {
                $("#name").removeClass("is-invalid");
                $("#phoneNumber").removeClass("is-invalid");
                $("#username").removeClass("is-invalid");
                $("#level").removeClass("is-invalid");

                $("#submit").html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menambahkan...'
                );
            },
            success: function (response) {
                if (response.status == 201) {
                    Toast.fire({
                        type: "success",
                        title: "Berhasil!\n" + response.message,
                    });

                    $("#formModal").modal("hide");
                    table.draw();
                } else if (response.status == 422) {
                    Toast.fire({
                        type: "warning",
                        title: "Gagal!\n" + response.message,
                    });

                    if (response.data.level) {
                        $("#level").addClass("is-invalid").focus();
                        $("#levelError").html(response.data.level);
                    }

                    if (response.data.phone_number) {
                        $("#phoneNumber").addClass("is-invalid").focus();
                        $("#phoneNumberError").html(response.data.phone_number);
                    }

                    if (response.data.username) {
                        $("#username").addClass("is-invalid").focus();
                        $("#usernameError").html(response.data.username);
                    }

                    if (response.data.name) {
                        $("#name").addClass("is-invalid").focus();
                        $("#nameError").html(response.data.name);
                    }
                } else {
                    Toast.fire({
                        type: "error",
                        title: "Gagal!\n" + response.message,
                    });
                }

                $("#submit").html("Tambah");
            },
            error: function (error) {
                Toast.fire({
                    type: "error",
                    title: "Gagal!\n" + error.responseJSON.message,
                });

                $("#submit").html("Tambah");
            },
        });
    });
});
