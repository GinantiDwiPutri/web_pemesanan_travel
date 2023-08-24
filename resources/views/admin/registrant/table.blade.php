@forelse ($registrants as $registrant)
    <tr class="{{ $registrant['status'] == 'blocked' ? 'bg-danger-subtle' : null }}">
        <td>{{ $registrant['displayName'] }}</td>
        <td>{{ $registrant['phoneNumber'] }}</td>
        <td>{{ $registrant['carType'] }} ({{ $registrant['carNumber'] }})</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <button class="dropdown-item text-success accept" data-id="{{ $registrant['phoneNumber'] }}">
                        Terima
                    </button>
                    <a href="{{ url('registrants/detail', Crypt::encrypt($registrant['phoneNumber'])) }}"
                        class="dropdown-item">
                        Lihat
                    </a>
                    <button class="dropdown-item text-danger delete" data-id="{{ $registrant['phoneNumber'] }}">
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
