$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#registerForm").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            dataType: "json",
            contentType: false,
            beforeSend: function() {
                $("#nameError").html("");
                $("#emailError").html("");
                $("#passwordError").html("");
                $("#confirmPasswordError").html("");

                $("#name").removeClass("is-invalid");
                $("#email").removeClass("is-invalid");
                $("#password").removeClass("is-invalid");
                $("#confirmPassword").removeClass("is-invalid");

                $("#registerButton").html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mendaftarkan ...'
                );
            },
            success: function(response) {
                if (response.statusCode == 200) {
                    Swal.fire({
                        icon: "success",
                        title: response.status,
                        text: response.message,
                        confirmButtonText: "Lanjut",
                        allowOutsideClick: () => {
                            console.log("Klik Tombol Lanjut");
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "verification-email";
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: response.status,
                        text: response.message,
                        confirmButtonText: "Tutup",
                        confirmButtonColor: "#6C757D",
                    });
                }
                $("#registerButton").html("Daftar");
            },
            error: function(error) {
                if (error.status == 422) {
                    console.error(error);
                    const responseError = error["responseJSON"]["errors"];
                    $("#nameError").html(responseError["name"]);
                    $("#emailError").html(responseError["email"]);
                    $("#passwordError").html(responseError["password"]);

                    if (
                        responseError["name"] &&
                        responseError["email"] &&
                        responseError["password"]
                    ) {
                        $("#name").addClass("is-invalid");
                        $("#email").addClass("is-invalid");
                        $("#password").addClass("is-invalid");
                        $("#name").focus();
                    } else if (
                        responseError["name"] &&
                        responseError["email"]
                    ) {
                        $("#name").addClass("is-invalid");
                        $("#email").addClass("is-invalid");
                        $("#name").focus();

                        if (responseError["password_confirmation"]) {
                            $("#confirmPassword").addClass("is-invalid");
                            $("#confirmPasswordError").html(
                                responseError["password_confirmation"]
                            );
                        }
                    } else if (
                        responseError["name"] &&
                        responseError["password"]
                    ) {
                        $("#name").addClass("is-invalid");
                        $("#password").addClass("is-invalid");
                        $("#name").focus();
                    } else if (
                        responseError["email"] &&
                        responseError["password"]
                    ) {
                        $("#email").addClass("is-invalid");
                        $("#password").addClass("is-invalid");
                        $("#email").focus();
                    } else if (responseError["name"]) {
                        $("#name").addClass("is-invalid");
                        $("#name").focus();
                        if (responseError["password_confirmation"]) {
                            $("#confirmPassword").addClass("is-invalid");
                            $("#confirmPasswordError").html(
                                responseError["password_confirmation"]
                            );
                        }
                    } else if (responseError["email"]) {
                        $("#email").addClass("is-invalid");
                        $("#email").focus();
                        if (responseError["password_confirmation"]) {
                            $("#confirmPassword").addClass("is-invalid");
                            $("#confirmPasswordError").html(
                                responseError["password_confirmation"]
                            );
                        }
                    } else {
                        $("#confirmPassword").addClass("is-invalid");
                        $("#confirmPasswordError").html(
                            responseError["password_confirmation"]
                        );
                        $("#confirmPassword").focus();
                    }
                }
                $("#registerButton").html("Daftar");
            },
        });
    });
});
