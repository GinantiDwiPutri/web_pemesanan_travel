@forelse ($users as $user)
    <tr class="{{ $user['status'] == 'blocked' ? 'bg-danger-subtle' : null }}">
        <td>{{ $user['displayName'] }}</td>
        <td>{{ $user['phoneNumber'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <a href="{{ url('users/detail', Crypt::encrypt($user['phoneNumber'])) }}" class="dropdown-item">
                        Lihat
                    </a>
                    <button class="dropdown-item edit" data-id="{{ $user['phoneNumber'] }}">
                        Edit
                    </button>
                    @if ($user['status'] != 'blocked')
                        <button class="dropdown-item text-danger block" data-id="{{ $user['phoneNumber'] }}">
                            Blokir Akun
                        </button>
                    @else
                        <button class="dropdown-item cancel-block" data-id="{{ $user['phoneNumber'] }}">
                            Batalkan Blokir
                        </button>
                    @endif
                    <button class="dropdown-item text-danger delete" data-id="{{ $user['phoneNumber'] }}">
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
