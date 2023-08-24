$(document).ready(function () {
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
                $("#submit").prop("disabled", true).html("Memeriksa ...");
            },
            success: function (response) {
                if (response.status == 201) {
                    Swal.fire({
                        type: "success",
                        title: "Berhasil!",
                        text: response.message,
                        confirmButtonText: "Lanjut",
                        allowOutsideClick: () => {
                            console.log("Klik Tombol Lanjut");
                        },
                    }).then((result) => {
                        window.location.reload();
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

                $("#submit").prop("disabled", false).html("Simpan");
            },
        });
    });
});
