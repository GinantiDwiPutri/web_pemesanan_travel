@forelse ($orders as $order)
    <tr>
        <td>{{ $order['route'] }}</td>
        <td>{{ $order['seat'] }}</td>
        <td>
            @php
                $user = app('firebase.firestore')
                    ->database()
                    ->collection('users')
                    ->document($order['clientPhoneNumber'])
                    ->snapshot()
                    ->data();
            @endphp
            {{ $user['displayName'] }}
        </td>
        <td>{{ $order['status'] }}</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <button class="dropdown-item delete" data-id="{{ $order->id() }}">
                        Hapus
                    </button>
                </div>
            </span>
        </td>
    </tr>
@empty
    <tr class="text-center">
        <td colspan="5">Data Tidak Ditemukan</td>
    </tr>
@endforelse
