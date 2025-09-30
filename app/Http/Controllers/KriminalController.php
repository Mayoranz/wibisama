<?php
namespace App\Http\Controllers;

use App\Models\Kriminal;
use Illuminate\Http\Request;

class KriminalController extends Controller
{
    public function index()
    {
        $data = Kriminal::all();
        return view('kriminal.index', compact('data'));
    }

    public function create()
    {
        return view('kriminal.create');
    }

    public function store(Request $request)
    {
        Kriminal::create($request->all());
        return redirect()->route('kriminal.index')->with('success', 'Data kriminal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kriminal = Kriminal::findOrFail($id);
        return view('kriminal.edit', compact('kriminal'));
    }

    public function update(Request $request, $id)
    {
        $kriminal = Kriminal::findOrFail($id);
        $kriminal->update($request->all());
        return redirect()->route('kriminal.index')->with('success', 'Data kriminal berhasil diperbarui');
    }

    public function destroy($id)
    {
        Kriminal::destroy($id);
        return redirect()->route('kriminal.index')->with('success', 'Data kriminal berhasil dihapus');
    }
}
?>