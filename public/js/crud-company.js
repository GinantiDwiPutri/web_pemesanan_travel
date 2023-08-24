function clearForm() {
    $("#id").val("");
    $("#name").removeClass("is-invalid").val("");
    $("#phoneNumber").removeClass("is-invalid").val("");
    $("#email").removeClass("is-invalid").val("");
}

$(document).ready(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
    });

    table = $("#table").DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        autoWidth: false,
        responsive: true,
        ajax: "companies/json",
        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                searchable: false,
            },
            {
                data: "name",
                name: "name",
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
                class: "text-center",
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

    $("#createButton").click(function() {
        $("#formModal").modal("show");
        $("#heading").html("Tambah Data");
        $("#buttonText").html("Tambah");
        clearForm();
    });

    $("#formModal").on("shown.bs.modal", function() {
        $("#name").focus();
    });

    $("body").on("click", ".edit", function() {
        $.ajax({
            url: "companies/check",
            method: "POST",
            data: {
                id: $(this).data("id"),
            },
            success: function(response) {
                console.log(response);
                if (response.status == 201) {
                    $("#formModal").modal("show");
                    $("#heading").html("Sunting Data");
                    $("#buttonText").html("Simpan");
                    clearForm();

                    $("#id").val(response.data.id);
                    $("#name").val(response.data.name);
                    $("#phoneNumber").val(response.data.phone_number);
                    $("#email").val(response.data.email);
                }
            },
            error: function(error) {
                console.error(error);
            },
        });
    });

    $("body").on("click", ".delete", function() {
        if (confirm("Yakin ingin menghapus data?") === true) {
            $.ajax({
                url: "companies/destroy",
                method: "DELETE",
                data: {
                    id: $(this).data("id"),
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == 201) {
                        Toast.fire({
                            icon: "success",
                            title: "Berhasil!\n" + response.message,
                        });

                        table.draw();
                    }
                },
                error: function(error) {
                    console.error(error);
                },
            });
        }
    });

    $("#form").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            dataType: "json",
            contentType: false,
            beforeSend: function() {
                $("#name").removeClass("is-invalid");
                $("#phoneNumber").removeClass("is-invalid");
                $("#email").removeClass("is-invalid");
                $("#buttonText").html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menambahkan...'
                );
            },
            success: function(response) {
                console.log(response);
                if (response.status == 201) {
                    Toast.fire({
                        icon: "success",
                        title: "Berhasil!\n" + response.message,
                    });

                    $("#formModal").modal("hide");
                    table.draw();
                } else if (response.status == 422) {
                    Toast.fire({
                        icon: "warning",
                        title: "Gagal!\n" + response.message,
                    });

                    if (
                        response.data.name &&
                        response.data.phone_number &&
                        response.data.email
                    ) {
                        $("#name").addClass("is-invalid");
                        $("#nameError").html(response.data.name);
                        $("#phoneNumber").addClass("is-invalid");
                        $("#phoneNumberError").html(response.data.phone_number);
                        $("#email").addClass("is-invalid");
                        $("#emailError").html(response.data.email);

                        $("#name").focus();
                    } else if (
                        response.data.name &&
                        response.data.phone_number
                    ) {
                        $("#name").addClass("is-invalid");
                        $("#nameError").html(response.data.name);
                        $("#phoneNumber").addClass("is-invalid");
                        $("#phoneNumberError").html(response.data.phone_number);

                        $("#name").focus();
                    } else if (response.data.name && response.data.email) {
                        $("#name").addClass("is-invalid");
                        $("#nameError").html(response.data.name);
                        $("#email").addClass("is-invalid");
                        $("#emailError").html(response.data.email);

                        $("#name").focus();
                    } else if (
                        response.data.phone_number &&
                        response.data.email
                    ) {
                        $("#phoneNumber").addClass("is-invalid");
                        $("#phoneNumberError").html(response.data.phone_number);
                        $("#email").addClass("is-invalid");
                        $("#emailError").html(response.data.email);

                        $("#phoneNumber").focus();
                    } else if (response.data.name) {
                        $("#name").addClass("is-invalid");
                        $("#nameError").html(response.data.name);

                        $("#name").focus();
                    } else if (response.data.phone_number) {
                        $("#phoneNumber").addClass("is-invalid");
                        $("#phoneNumberError").html(response.data.phone_number);

                        $("#phoneNumber").focus();
                    } else {
                        $("#email").addClass("is-invalid");
                        $("#emailError").html(response.data.email);

                        $("#email").focus();
                    }
                } else {
                    Toast.fire({
                        icon: "error",
                        title: "Gagal!\n" + response.message,
                    });
                }

                $("#buttonText").html("Tambah");
            },
            error: function(error) {
                console.error(error);
                Toast.fire({
                    icon: "error",
                    title: "Gagal!\n" + error.responseJSON.message,
                });

                $("#buttonText").html("Tambah");
            },
        });
    });
});
