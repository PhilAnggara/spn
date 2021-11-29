<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('tahun_angkatan', '2020')->get()->count();
        // dd($siswa);

        return view('pages.dashboard', [
            'siswa' => $siswa,
        ]);
    }
    
    public function about()
    {
        return view('pages.tentang');
    }
    
    public function structure()
    {
        return view('pages.struktur');
    }
}
