<h1>Data Kriminal</h1>
<a href="{{ route('kriminal.create') }}">Tambah Kriminal</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Usia</th>
        <th>Kasus</th>
        <th>Lama Hukuman</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $k)
    <tr>
        <td>{{ $k->nama }}</td>
        <td>{{ $k->usia }}</td>
        <td>{{ $k->kasus }}</td>
        <td>{{ $k->lama_hukuman }}</td>
        <td>
            <a href="{{ route('kriminal.edit', $k->id) }}">Edit</a>
            <form action="{{ route('kriminal.destroy', $k->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
