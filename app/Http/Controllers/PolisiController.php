<?php
namespace App\Http\Controllers;

use App\Models\Polisi;
use Illuminate\Http\Request;

class PolisiController extends Controller
{
    public function index()
    {
        $data = Polisi::all();
        return view('polisi.index', compact('data'));
    }

    public function create()
    {
        return view('polisi.create');
    }

    public function store(Request $request)
    {
        Polisi::create($request->all());
        return redirect()->route('polisi.index')->with('success', 'Data polisi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $polisi = Polisi::findOrFail($id);
        return view('polisi.edit', compact('polisi'));
    }

    public function update(Request $request, $id)
    {
        $polisi = Polisi::findOrFail($id);
        $polisi->update($request->all());
        return redirect()->route('polisi.index')->with('success', 'Data polisi berhasil diperbarui');
    }

    public function destroy($id)
    {
        Polisi::destroy($id);
        return redirect()->route('polisi.index')->with('success', 'Data polisi berhasil dihapus');
    }
}
?>