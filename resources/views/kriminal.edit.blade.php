<h1>Edit Kriminal</h1>
<form action="{{ route('kriminal.update', $kriminal->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $kriminal->nama }}"><br>
    Usia: <input type="number" name="usia" value="{{ $kriminal->usia }}"><br>
    Kasus: <input type="text" name="kasus" value="{{ $kriminal->kasus }}"><br>
    Lama Hukuman: <input type="text" name="lama_hukuman" value="{{ $kriminal->lama_hukuman }}"><br>
    <button type="submit">Update</button>
</form>
