<?php
namespace App\Http\Controllers;

use App\Models\Lapas;
use Illuminate\Http\Request;

class LapasController extends Controller
{
    public function index()
    {
        $data = Lapas::all();
        return view('lapas.index', compact('data'));
    }

    public function create()
    {
        return view('lapas.create');
    }

    public function store(Request $request)
    {
        Lapas::create($request->all());
        return redirect()->route('lapas.index')->with('success', 'Data lapas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $lapas = Lapas::findOrFail($id);
        return view('lapas.edit', compact('lapas'));
    }

    public function update(Request $request, $id)
    {
        $lapas = Lapas::findOrFail($id);
        $lapas->update($request->all());
        return redirect()->route('lapas.index')->with('success', 'Data lapas berhasil diperbarui');
    }

    public function destroy($id)
    {
        Lapas::destroy($id);
        return redirect()->route('lapas.index')->with('success', 'Data lapas berhasil dihapus');
    }
}
?>