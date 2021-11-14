<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $items = Siswa::all();

        return view('pages.siswa', [
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
        $time = strtotime($request->tanggal_lahir);
        $data['tanggal_lahir'] = date('Y-m-d',$time);
        Siswa::create($data);

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
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
