<h1>Edit Lapas</h1>
<form action="{{ route('lapas.update', $lapas->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $lapas->nama }}"><br>
    Lokasi: <input type="text" name="lokasi" value="{{ $lapas->lokasi }}"><br>
    Kapasitas: <input type="text" name="kapasitas" value="{{ $lapas->kapasitas }}"><br>
    <button type="submit">Update</button>
</form>
