function clearForm() {
    $("#id").val("");
    $("#displayName").removeClass("is-invalid").val("");
    $("#phoneNumber").removeClass("is-invalid").val("");
    $("#email").removeClass("is-invalid").val("");
}

function table() {
    $.get("users/table", function (data) {
        $("#table-wrapper").html(data);
    });
}

$(document).ready(function () {
    table();

    var Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
    });

    $("#create").click(function () {
        $("#formModal").modal("show");
        $("#heading").html("Tambah Data");

        $("#id").val("");
        $("#displayName").val("").removeClass("is-invalid");
        $("#phoneNumber").val("").removeClass("is-invalid bg-secondary-subtle").attr('readonly', false);
        $("#email").val("").removeClass("is-invalid");
    });

    $("#formModal").on("shown.bs.modal", function () {
        $("#displayName").focus();
    });

    $("body").on("click", ".edit", function () {
        $.ajax({
            url: "users/check",
            method: "POST",
            data: {
                id: $(this).data("id"),
            },
            success: function (response) {
                if (response.status == 201) {
                    $("#formModal").modal("show");
                    $("#heading").html("Tinjau dan Edit Data");
                    $("#buttonText").html("Simpan");
                    clearForm();

                    $("#id").val(response.data.phoneNumber);
                    $("#displayName").val(response.data.displayName);
                    $("#phoneNumber").val(response.data.phoneNumber);
                    $("#email").val(response.data.email);
                }
            },
        });
    });

    $("body").on("click", ".block", function () {
        if (confirm("Yakin ingin memblokir pengguna ini?")) {
            var id = $(this).data("id");
            $.ajax({
                url: "users/block",
                method: "POST",
                data: { id: id },
                success: function (response) {
                    if (response.status == 201) {
                        Toast.fire({
                            type: "success",
                            title: "Berhasil!\n" + response.message,
                        });
                    }
                    table();
                },
                error: function (error) {
                    Toast.fire({
                        type: "error",
                        title: "Gagal!\n" + error.responseJSON.message,
                    });
                },
            });
        }
    });

    $("body").on("click", ".cancel-block", function () {
        if (confirm("Yakin ingin mengaktifkan kembali pengguna ini?")) {
            var id = $(this).data("id");
            $.ajax({
                url: "users/cancel-block",
                method: "POST",
                data: { id: id },
                success: function (response) {
                    if (response.status == 201) {
                        Toast.fire({
                            type: "success",
                            title: "Berhasil!\n" + response.message,
                        });
                    }
                    table();
                },
                error: function (error) {
                    Toast.fire({
                        type: "error",
                        title: "Gagal!\n" + error.responseJSON.message,
                    });
                },
            });
        }
    });

    $("body").on("click", ".delete", function () {
        var id = $(this).data("id");

        if (confirm("Yakin ingin melanjutkan?") === true) {
            $.ajax({
                url: "users/destroy",
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
                    } else {
                        Toast.fire({
                            type: "error",
                            title: "Gagal!\n" + response.message,
                        });
                    }

                    table();
                },
            });
        }
    });

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
                $("#displayName").removeClass("is-invalid");
                $("#phoneNumber").removeClass("is-invalid");
                $("#email").removeClass("is-invalid");
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
                    table();
                } else if (response.status == 422) {
                    Toast.fire({
                        type: "warning",
                        title: "Gagal!\n" + response.message,
                    });

                    if(response.data.email) {
                        $("#email").addClass("is-invalid").focus();
                        $("#emailError").html(response.data.email);
                    }

                    if(response.data.display_name) {
                        $("#displayName").addClass("is-invalid").focus();
                        $("#displayNameError").html(response.data.display_name);
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
