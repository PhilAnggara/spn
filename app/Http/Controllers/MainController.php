<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('id_ta', $this->cta)->get()->count();
        $instruktur = User::where('level', 'instruktur')->get()->count();
        $mapel = MataPelajaran::where('id_ta', $this->cta)->get()->count();
        $kompi = Siswa::where('id_ta', $this->cta)->get()->unique('kompi')->count();
        $akademik = Nilai::all()->avg('nilai');
        $mental = Nilai::all()->avg('nilai');

        return view('pages.dashboard', [
            'siswa' => $siswa,
            'instruktur' => $instruktur,
            'mapel' => $mapel,
            'kompi' => $kompi,
        ]);
    }
    
    public function about()
    {
        return view('pages.tentang');
    }
    
    public function galeri()
    {
        return view('pages.galeri');
    }
    
    public function structure()
    {
        return view('pages.struktur');
    }
}
