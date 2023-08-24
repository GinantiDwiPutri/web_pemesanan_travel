function clearForm() {
    $("#id").val("");
    $("#title").removeClass("is-invalid").val("");
    $("#phoneNumber").removeClass("is-invalid").val("");
    $("#content").removeClass("is-invalid").val("");
}

function table() {
    $.get("orders/table", function (data) {
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
        $("#heading").html("Tambah Data");
        $("#formModal").modal("show");

        $("#id").val("").removeClass("is-invalid");
        $("#route").val("").removeClass("is-invalid");
    });

    $("#formModal").on("shown.bs.modal", function () {
        $("#route").focus();
    });

    $("body").on("click", ".edit", function () {
        var id = $(this).data("id");

        $.ajax({
            url: "orders/check",
            method: "POST",
            data: {
                id: $(this).data("id"),
            },
            success: function (response) {
                if (response.status == 201) {
                    $("#formModal").modal("show");
                    $("#heading").html("Sunting Data");
                    $("#buttonText").html("Simpan");
                    clearForm();

                    $("#id").val(id);
                    $("#route").val(response.data.route);
                }
            },
        });
    });

    $("body").on("click", ".delete", function () {
        var id = $(this).data("id");

        if (confirm("Yakin ingin melanjutkan?") === true) {
            $.ajax({
                url: "orders/destroy",
                method: "POST",
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
                $("#route").removeClass("is-invalid");

                $("#submit").html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...'
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

                    if (response.data.route) {
                        $("#route").addClass("is-invalid").focus();
                        $("#routeError").html(response.data.route);
                    }
                } else {
                    console.log(response);
                    Toast.fire({
                        type: "error",
                        title: "Gagal!\n" + response.message,
                    });
                }

                $("#submit").html("Tambah");
            },
        });
    });
});
