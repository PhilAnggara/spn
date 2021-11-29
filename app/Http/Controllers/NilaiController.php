<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Siswa;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('nilai')->get();
        $mapel = MataPelajaran::with('nilai')->get();

        return view('pages.nilai', [
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
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $mapel = MataPelajaran::all();

        foreach ($mapel as $mp) {
            // Cek apakah field nilai tidak kosong
            if ($data['mp_'.$mp->id]) {
                // Cek apakah nilai sudah pernah diisi atau belum
                if ($request->has('nilai_'.$mp->id)) {
                    $nilai = Nilai::find($data['nilai_'.$mp->id]);
                    $nilai->nilai = $data['mp_'.$mp->id];
                    $nilai->save();
                } else {
                    Nilai::create([
                        'id_siswa' => $id,
                        'id_mapel' => $mp->id,
                        'nilai' => $data['mp_'.$mp->id]
                    ]);
                }
            }            
        }

        return redirect()->back()->with('success', 'Nilai berhasil disimpan!');
    }

    public function destroy($id)
    {
        //
    }
}
