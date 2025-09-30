<h1>Data Lapas</h1>
<a href="{{ route('lapas.create') }}">Tambah Lapas</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Lokasi</th>
        <th>Kapasitas</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $l)
    <tr>
        <td>{{ $l->nama }}</td>
        <td>{{ $l->lokasi }}</td>
        <td>{{ $l->kapasitas }}</td>
        <td>
            <a href="{{ route('lapas.edit', $l->id) }}">Edit</a>
            <form action="{{ route('lapas.destroy', $l->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
