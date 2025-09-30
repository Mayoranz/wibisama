<h1>Edit Polisi</h1>
<form action="{{ route('polisi.update', $polisi->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $polisi->nama }}"><br>
    Usia: <input type="number" name="usia" value="{{ $polisi->usia }}"><br>
    Jabatan: <input type="text" name="jabatan" value="{{ $polisi->jabatan }}"><br>
    <button type="submit">Update</button>
</form>
