<h1>Data Polisi</h1>
<a href="{{ route('polisi.create') }}">Tambah Polisi</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Usia</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->usia }}</td>
        <td>{{ $p->jabatan }}</td>
        <td>
            <a href="{{ route('polisi.edit', $p->id) }}">Edit</a>
            <form action="{{ route('polisi.destroy', $p->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
