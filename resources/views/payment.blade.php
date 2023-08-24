<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran Berangkut</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets-admin/static/logo-small.png') }}">

    <link href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
</head>

<body>
    <form id="form">
        <input type="hidden" name="price" value="{{ request()->price }}">
        <input type="hidden" name="route" value="{{ request()->route }}">
        <input type="hidden" name="seat" value="{{ request()->seat }}">
        <input type="hidden" name="date" value="{{ request()->date }}">
        <input type="hidden" name="time" value="{{ request()->time }}">
        <input type="hidden" name="display_name" value="{{ request()->displayName }}">
        <input type="hidden" name="client_phone_number" value="{{ request()->clientPhoneNumber }}">
        <input type="hidden" name="driver_phone_number" value="{{ request()->driverPhoneNumber }}">
        <input type="hidden" name="trip_id" value="{{ request()->tripID }}">

    </form>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    $.ajax({
                        url: 'add-order',
                        method: 'POST',
                        data: $('#form').serialize(),
                        processData: false,
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                type: "success",
                                title: "Pembayaran Berhasil",
                                text: 'Anda bisa melihat detail reservasi perjalanan anda pada tinjau perjalanan.',
                                confirmButtonColor: "#59C4BC",
                                confirmButtonText: "Lanjut",
                                backdrop: true,
                                allowOutsideClick: () => {
                                    console.log(
                                        "Klik Tombol Lanjut");
                                },
                            });
                        },
                    });
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    Swal.fire({
                        type: "warning",
                        title: "Mohon Segera Dibayar",
                        text: "Kami Masih Menunggu Pembayaranmu",
                    });
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    Swal.fire({
                        type: "error",
                        title: "Transaksi Gagal",
                        text: "Coba Lagi Dalam Beberapa Saat",
                    });
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert(
                        'Kamu menutup pembayaran'
                    );
                    $("#submit").html(
                        'Bayar<i class="far fa-long-arrow-right"></i>'
                    );
                }
            });
        });
    </script>
</body>

</html>
