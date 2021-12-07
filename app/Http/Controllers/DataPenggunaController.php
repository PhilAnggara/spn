<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nrp' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);

        return redirect()->back()->with('success', 'Pengguna berhasil ditambahkan!');
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nrp' => ['required', 'max:255', 'unique:users,nrp,'. $id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $id],
        ]);

        $data = $request->all();
        $item = User::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Pengguna dihapus!');
    }
}
