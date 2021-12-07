<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    public function index()
    {
        $levels = ['admin','pejabat','instruktur'];
        $items = User::all()->sortBy(function($model) use ($levels) {
            return array_search($model->getKey(), $levels);
        });
        return view('pages.data-pengguna', [
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
        $item = User::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Tahun Akademik dihapus!');
    }
}
