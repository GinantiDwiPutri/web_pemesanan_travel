$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
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
                $("#username").removeClass("is-invalid");
                $("#password").removeClass("is-invalid");

                $("#submit").prop("disabled", true).html("Memeriksa ...");
            },
            success: function (response) {
                if (response.code == 200) {
                    Swal.fire({
                        type: "success",
                        title: "Berhasil!",
                        text: response.message,
                        confirmButtonText: "Lanjut",
                        allowOutsideClick: () => {
                            console.log("Klik Tombol Lanjut");
                        },
                    }).then((result) => {
                        window.location.href = "dashboard";
                    });
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Gagal!",
                        text: response.message,
                        confirmButtonText: "Tutup",
                        confirmButtonColor: "#6C757D",
                    });
                }

                $("#submit").prop("disabled", false).html("Masuk");
            },
            error: function (error) {
                console.log(error);
                if (error.status == 422) {
                    const responseError = error["responseJSON"]["errors"];
                    $("#usernameError").html(responseError["username"]);
                    $("#passwordError").html(responseError["password"]);

                    if (responseError["username"]) {
                        $("#username").addClass("is-invalid");
                        $("#username").focus();
                    }

                    if (responseError["password"]) {
                        $("#password").addClass("is-invalid");
                        $("#password").focus();
                    }
                }

                if (error.status == 419) {
                    window.reload();
                }

                $("#submit").prop("disabled", false).html("Masuk");
            },
        });
    });
});
