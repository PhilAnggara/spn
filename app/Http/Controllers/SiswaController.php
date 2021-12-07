<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Siswa;
use App\Models\TahunAngkatan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $items = Siswa::where('id_ta', $this->cta)->get();
        $mapel = MataPelajaran::where('id_ta', $this->cta)->get();
        $tahun_angkatan = TahunAngkatan::all()->sortDesc();

        return view('pages.siswa', [
            'items' => $items,
            'tahun_angkatan' => $tahun_angkatan
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
        if ($request['foto']) {
            $ext = $request->file('foto')->extension();
            $data['foto'] = $request->file('foto')->storeAs('gambar/siswa', $data['nama'].'.'.$ext, 'public');
        }
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
        $data = $request->all();
        $time = strtotime($request->tanggal_lahir);
        $data['tanggal_lahir'] = date('Y-m-d',$time);
        if ($request['foto']) {
            $ext = $request->file('foto')->extension();
            $data['foto'] = $request->file('foto')->storeAs('gambar/siswa', $data['nama'].'.'.$ext, 'public');
        }
        $item = Siswa::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = Siswa::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Siswa dihapus!');
    }
}
