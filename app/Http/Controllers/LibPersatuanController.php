<?php

namespace App\Http\Controllers;

use App\Models\libPersatuan;
use Illuminate\Http\Request;

class LibPersatuanController extends Controller
{
    public function index()
    {
        $list = libPersatuan::all();
        return view('lib.persatuan.index', compact('list'));
    }

    public function tambah()
    {
        return view('lib.persatuan.tambah', ['persatuan' => new libPersatuan()]);
    }

    public function store(Request $request)
    {
       $data =  $request->validate([
            'Persatuan' => ['required', 'string', 'max:200'],
            'Singkatan' => ['required', 'string', 'max:50'],
            'NoBank' => ['Nullable', 'string', 'max:50'],
            'Bank' => ['Nullable', 'string', 'max:70'],
            'Nama' => ['Nullable', 'string', 'max:100'],
        ], [
            'Persatuan.max' => 'Persatuan tidak melebihi 200 aksara',
            'Persatuan.required' => 'Medan Persatuan tidak boleh kosong',
            'Singkatan.max' => 'Singkatan tidak melebihi 50 aksara',
            'Singkatan.required' => 'Medan Singkatan tidak boleh kosong',
            'NoBank.max' => 'NoBank tidak melebihi 50 aksara',            
            'Bank.max' => 'Bank tidak melebihi 70 aksara',            
            'Nama.max' => 'Nama tidak melebihi 100 aksara',            
        ]);

        $store = libPersatuan::create($data);

        if($store)
        {
            return redirect()->route('admin.libpersatuan.index')->with('success', 'Persatuan berjaya di tambah');
        }
        else
        {
            return redirect()->back()->withErrors('Persatuan tidak berjaya di tambah');

        }
    }

    public function edit($id)
    {
        $persatuan = libPersatuan::find($id);
        return view('lib.persatuan.tambah', compact('persatuan'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'Persatuan' => ['required', 'string', 'max:200'],
            'Singkatan' => ['required', 'string', 'max:50'],
            'NoBank' => ['Nullable', 'string', 'max:50'],
            'Bank' => ['Nullable', 'string', 'max:70'],
            'Nama' => ['Nullable', 'string', 'max:100'],
        ], [
            'Persatuan.max' => 'Persatuan tidak melebihi 200 aksara',
            'Persatuan.required' => 'Medan Persatuan tidak boleh kosong',
            'Singkatan.max' => 'Singkatan tidak melebihi 50 aksara',
            'Singkatan.required' => 'Medan Singkatan tidak boleh kosong',
            'NoBank.max' => 'NoBank tidak melebihi 50 aksara',            
            'Bank.max' => 'Bank tidak melebihi 70 aksara',            
            'Nama.max' => 'Nama tidak melebihi 100 aksara',            
        ]);

        $persatuan = libPersatuan::findOrFail($id);
        $persatuan->update($request->all());

        return redirect()->route('admin.libpersatuan.index')->with('success', 'Persatuan berjaya di kemaskini!');
    }
}
