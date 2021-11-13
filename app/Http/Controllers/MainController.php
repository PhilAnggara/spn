<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
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
