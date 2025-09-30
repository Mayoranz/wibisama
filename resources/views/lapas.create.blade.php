<h1>Tambah Lapas</h1>
<form action="{{ route('lapas.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Lokasi: <input type="text" name="lokasi"><br>
    Kapasitas: <input type="text" name="kapasitas"><br>
    <button type="submit">Simpan</button>
</form>
