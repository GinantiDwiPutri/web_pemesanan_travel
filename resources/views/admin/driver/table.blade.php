@forelse ($drivers as $driver)
    <tr class="{{ $driver['status'] == 'blocked' ? 'bg-danger-subtle' : null }}">
        <td>{{ $driver['displayName'] }}</td>
        <td>{{ $driver['phoneNumber'] }}</td>
        <td>{{ $driver['carType'] }} ({{ $driver['carNumber'] }})</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <a href="{{ url('drivers/detail', Crypt::encrypt($driver['phoneNumber'])) }}" class="dropdown-item">
                        Lihat
                    </a>
                    <button class="dropdown-item edit" data-id="{{ $driver['phoneNumber'] }}">
                        Edit
                    </button>
                    @if ($driver['status'] != 'blocked')
                        <button class="dropdown-item text-danger block" data-id="{{ $driver['phoneNumber'] }}">
                            Blokir Akun
                        </button>
                    @else
                        <button class="dropdown-item cancel-block" data-id="{{ $driver['phoneNumber'] }}">
                            Batalkan Blokir
                        </button>
                    @endif
                    <button class="dropdown-item text-danger delete" data-id="{{ $driver['phoneNumber'] }}">
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
