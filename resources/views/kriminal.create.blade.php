<h1>Tambah Kriminal</h1>
<form action="{{ route('kriminal.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Usia: <input type="number" name="usia"><br>
    Kasus: <input type="text" name="kasus"><br>
    Lama Hukuman: <input type="text" name="lama_hukuman"><br>
    <button type="submit">Simpan</button>
</form>
