@foreach ($helps as $help)
    <tr>
        <td>{{ $help['title'] }}</td>
        <td>{{ $help['on'] }}</td>
        <td>
            <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                    data-bs-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <button class="dropdown-item edit" data-id="{{ $help->id() }}">
                        Tinjau dan Edit
                    </button>
                    <button class="dropdown-item delete" data-id="{{ $help->id() }}">
                        Hapus
                    </button>
                </div>
            </span>
        </td>
    </tr>
@endforeach
