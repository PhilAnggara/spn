<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\TahunAngkatan;
use App\Models\User;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $items = MataPelajaran::all()->sortDesc();
        $tahun_angkatan = TahunAngkatan::all()->sortDesc();
        $instruktur = User::where('level','instruktur')->get();

        return view('pages.mata-pelajaran', [
            'items' => $items,
            'tahun_angkatan' => $tahun_angkatan,
            'instruktur' => $instruktur,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        MataPelajaran::create($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahakan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = MataPelajaran::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $item = MataPelajaran::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Mata Pelajaran dihapus!');
    }
}
