<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('tahun_angkatan', '2020')->get()->count();
        $akademik = Nilai::all()->avg('nilai');
        $mental = Nilai::all()->avg('nilai');
        $kompi = Siswa::all()->unique('kompi')->count();
        // dd($kompi);

        return view('pages.dashboard', [
            'siswa' => $siswa,
            'akademik' => $akademik,
            'mental' => $mental,
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
