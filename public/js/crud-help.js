function clearForm() {
    $("#id").val("").removeClass("is-invalid");
    $("#title").val("").removeClass("is-invalid");
    $("#on").val("").removeClass("is-invalid");
    $("#content").val("").removeClass("is-invalid");
}

function table() {
    $.get("helps/table", function (data) {
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
        $("#title").focus();
    });

    $("body").on("click", ".edit", function () {
        var id = $(this).data("id");

        $.ajax({
            url: "helps/check",
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
                    $("#title").val(response.data.title);
                    $("#on").val(response.data.on);
                    $("#content").val(response.data.content);
                }
            },
        });
    });

    $("body").on("click", ".delete", function () {
        var id = $(this).data("id");

        if (confirm("Yakin ingin melanjutkan?") === true) {
            $.ajax({
                url: "helps/destroy",
                method: "POST",
                data: {
                    id: $(this).data("id"),
                },
                success: function (response) {
                    console.log(response);
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
                $("#title").removeClass("is-invalid");
                $("#on").removeClass("is-invalid");
                $("#content").removeClass("is-invalid");
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

                    if (response.data.content) {
                        $("#content").addClass("is-invalid").focus();
                        $("#contentError").html(response.data.content);
                    }

                    if (response.data.on) {
                        $("#on").addClass("is-invalid").focus();
                        $("#onError").html(response.data.on);
                    }

                    if (response.data.title) {
                        $("#title").addClass("is-invalid").focus();
                        $("#titleError").html(response.data.title);
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
            error: function (error) {
                console.log(error);

                Toast.fire({
                    type: "error",
                    title:
                        "Gagal (" +
                        error.status +
                        ")!\n" +
                        error.responseJSON.message,
                });

                $("#submit").html("Tambah");
            },
        });
    });
});
