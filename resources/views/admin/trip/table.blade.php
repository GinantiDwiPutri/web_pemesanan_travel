@forelse ($trips as $trip)
    <tr>
        <td>{{ $trip['route'] }}</td>
        <td>{{ $trip['date'] }}</td>
        <td>{{ $trip['time'] }} WIB</td>
        <td>Rp {{ str_replace(',', '.', number_format($trip['price'])) }}</td>
        <td>
            @php
                $driver = app('firebase.firestore')
                    ->database()
                    ->collection('drivers')
                    ->document($trip['driverPhoneNumber'])
                    ->snapshot()
                    ->data();
            @endphp
            {{ $driver['displayName'] }}
        </td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <button class="dropdown-item edit" data-id="{{ $trip->id() }}">
                        Tinjau dan Edit
                    </button>
                    <button class="dropdown-item delete" data-id="{{ $trip->id() }}">
                        Hapus
                    </button>
                </div>
            </span>
        </td>
    </tr>
@empty
    <tr class="text-center">
        <td colspan="4">Data Tidak Ditemukan</td>
    </tr>
@endforelse
