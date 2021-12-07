<?php

namespace App\Http\Controllers;

use App\Models\TahunAngkatan;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    public function index()
    {
        $items = TahunAngkatan::all()->sortDesc();
        return view('pages.tahun-akademik', [
            'items' => $items
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $data = $request->all();

        if ($data['aktif']) {
            $current = TahunAngkatan::where('aktif',1)->first();
            $current->aktif = 0;
            $current->save();
        }

        TahunAngkatan::create($data);

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

        if ($data['aktif']) {
            $current = TahunAngkatan::where('aktif',1)->first();
            $current->aktif = 0;
            $current->save();
        }
        
        $item = TahunAngkatan::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = TahunAngkatan::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Tahun Akademik dihapus!');
    }
}
