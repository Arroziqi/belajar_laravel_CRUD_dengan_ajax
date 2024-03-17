<x-app-layout>
    <div class="flex flex-col">
        <div class="p-5">
            <form action="{{ route('kepala-keluarga.store') }}" method="POST">
                @csrf
                <input type="text" name="nama" placeholder="nama">
                <input type="text" name="alamat" placeholder="alamat">
                <input type="text" name="no_telp" placeholder="no_telp">
                <input type="submit" value="Tambah">
            </form>
        </div>
        <table class="w-100">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Aksi</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>
                        <ul>
                            <li><a href="{{ route('kepala-keluarga.show', $item->id) }}">Show</a></li>
                            <li><a href="{{ route('kepala-keluarga.edit', $item->id) }}">Edit</a></li>
                            <li>
                                <form action="{{ route('kepala-keluarga.destroy', $item->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
