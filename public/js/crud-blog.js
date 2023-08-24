function clearForm() {
    $("#id").val("");
    $("#name").removeClass("is-invalid").val("");
    $("#phoneNumber").removeClass("is-invalid").val("");
    $("#username").removeClass("is-invalid").val("");
    $("#level").removeClass("is-invalid").val("");
}

$(document).ready(function () {
    var Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
    });

    table = $("#table").DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        autoWidth: false,
        responsive: true,
        ajax: "blogs",
        columns: [
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
                class: "text-center",
            },
            {
                data: "title",
                name: "title",
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

    $("body").on("click", ".delete", function () {
        if (confirm("Yakin ingin menghapus data?") === true) {
            $.ajax({
                url: "blogs/destroy",
                method: "DELETE",
                data: {
                    id: $(this).data("id"),
                },
                success: function (response) {
                    console.log(response);
                    if (response.code == 200) {
                        Toast.fire({
                            type: "success",
                            title: "Berhasil!\n" + response.message,
                        });

                        table.draw();
                    }
                },
                error: function(error){
                    console.error(error);
                }
            });
        }
    });
});
