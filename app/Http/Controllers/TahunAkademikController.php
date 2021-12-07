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
        //
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
        //
    }
    
    public function destroy($id)
    {
        $item = TahunAngkatan::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Tahun Akademik dihapus!');
    }
}
