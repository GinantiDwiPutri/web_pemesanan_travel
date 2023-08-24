function clearForm() {
    $("#id").val("").removeClass("is-invalid");
    $("#date").val("").removeClass("is-invalid");
    $("#time").val("").removeClass("is-invalid");
    $("#route").val("").removeClass("is-invalid");
    $("#driver").val("").removeClass("is-invalid");
}

function table() {
    $.get("trips/table", function (data) {
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

        clearForm();
    });

    $("#formModal").on("shown.bs.modal", function () {
        $("#route").focus();
    });

    $("body").on("click", ".edit", function () {
        var id = $(this).data("id");

        $.ajax({
            url: "trips/check",
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
                    $("#date").val(response.data.date);
                    $("#time").val(response.data.time);
                    $("#price").val(response.data.price);
                    $("#route").val(response.data.route);
                    $("#driver").val(response.data.driverPhoneNumber);
                }
            },
        });
    });

    $("body").on("click", ".delete", function () {
        var id = $(this).data("id");

        if (confirm("Yakin ingin melanjutkan?") === true) {
            $.ajax({
                url: "trips/destroy",
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
                $("#date").removeClass("is-invalid");
                $("#time").removeClass("is-invalid");
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

                    if (response.data.time) {
                        $("#time").addClass("is-invalid").focus();
                        $("#timeError").html(response.data.time);
                    }

                    if (response.data.date) {
                        $("#date").addClass("is-invalid").focus();
                        $("#dateError").html(response.data.date);
                    }

                } else {
                    console.log(response);
                    Toast.fire({
                        type: "error",
                        title: "Gagal!\n" + response.message,
                    });
                }

                $("#submit").html("Simpan");
            },
        });
    });
});
