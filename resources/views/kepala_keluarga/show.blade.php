<x-app-layout>
    <div class="flex flex-col">
        <table class="w-100">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>{{ $kepalaKeluarga->nama }}</td>
                <td>{{ $kepalaKeluarga->alamat }}</td>
                <td>{{ $kepalaKeluarga->no_telp }}</td>
                <td>
                    <ul>
                        <li><a href="{{ route('kepala-keluarga.show', $kepalaKeluarga->id) }}">Show</a></li>
                        <li><a href="{{ route('kepala-keluarga.edit', $kepalaKeluarga->id) }}">Edit</a></li>
                        <li>
                            <form action="{{ route('kepala-keluarga.destroy', $kepalaKeluarga->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete">
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</x-app-layout>
