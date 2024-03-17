<x-app-layout>
    <div class="flex flex-col">
        <div class="p-5">
            <form action="{{ route('kepala-keluarga.update', $kepalaKeluarga->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="nama" placeholder="nama" value="{{ $kepalaKeluarga->nama }}">
                <input type="text" name="alamat" placeholder="alamat" value="{{ $kepalaKeluarga->alamat }}">
                <input type="text" name="no_telp" placeholder="no_telp" value="{{ $kepalaKeluarga->no_telp }}">
                <input type="submit" value="Update">
            </form>
        </div>
    </div>
</x-app-layout>
