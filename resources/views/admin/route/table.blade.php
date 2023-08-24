@forelse ($routes as $route)
    <tr>
        <td>{{ $route['route'] }}</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <button class="dropdown-item edit" data-id="{{ $route->id() }}">
                        Tinjau dan Edit
                    </button>
                    <button class="dropdown-item delete text-danger" data-id="{{ $route->id() }}">
                        Hapus
                    </button>
                </div>
            </span>
        </td>
    </tr>
@empty
    <tr class="text-center">
        <td colspan="2">Data Tidak Ditemukan</td>
    </tr>
@endforelse
