<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('id_ta', $this->cta)->with('nilai')->get();
        $mapel = MataPelajaran::where('id_ta', $this->cta)->where('id_instruktur', auth()->user()->id)->with('nilai')->get();

        return view('pages.nilai-siswa.index', [
            'siswa' => $siswa,
            'mapel' => $mapel,
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
        $mapel = MataPelajaran::findOrFail($id);
        $siswa = Siswa::where('id_ta', $this->cta)->with('nilai')->get();

        return view('pages.nilai-siswa.edit', [
            'mapel' => $mapel,
            'siswa' => $siswa,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['id_siswa'] = $id;
        $data['nilai'] =    ($data['tugas_kelas']*10/100) + 
                            ($data['tugas_individu']*10/100) + 
                            ($data['praktikum']*20/100) + 
                            ($data['mental']*20/100) + 
                            ($data['uas']*40/100);

        if ($request->has('update')) {
            $nilai = Nilai::find($data['id_nilai']);
            $nilai->update($data);
        } else {
            Nilai::create($data);
        }

        return redirect()->back()->with('success', 'Nilai berhasil disimpan!');
    }

    public function destroy($id)
    {
        //
    }
}
