<h1>Tambah Polisi</h1>
<form action="{{ route('polisi.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Usia: <input type="number" name="usia"><br>
    Jabatan: <input type="text" name="jabatan"><br>
    <button type="submit">Simpan</button>
</form>
