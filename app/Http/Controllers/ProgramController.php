<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Rules\Required;
use App\Rules\StringField;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $list = program::all();
        return view('admin.pusat.program.index', compact('list'));
    }

    public function create()
    {
        return view('admin.pusat.program.tambah', ['program'=>new program()]);
    }


    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'NamaProgram' => [new Required(), new StringField(), 'max:50'],
            'Tempat' => [new Required(), new StringField(), 'max:70'],
            'Persatuan_ID' => [new Required(), new StringField(), 'max:30'],
            'StartDate' => ['nullable', 'date'],
            'EndDate' => ['nullable', 'date'],
            'JenisProgram' => [new Required(), new StringField(), 'max:50'],
            'Majlis' => [new Required(), new StringField(), 'max:50'],
            'Link' => [new Required(), new StringField(), 'max:50'],
            'Mode' => [new Required(), 'string', 'max:50', 'in:Peserta,Penggerak'],
        ]);

        $imageValidate = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:10240'],
        ]);

        $program = program::create($data);

        $image = $imageService->upload($request->image, 'program', $program, 'Thumbnail');

        $program->update([
            'Image_ID' => $image->id
        ]);

        return $program
            ? redirect()->route('admin.program.idex')->with('success', 'Program berjaya ditambah')
            : back()->withErrors('Produk tidak berjaya ditambah');
    }


    public function edit($id) {
        $program = program::find($id);

        return view('admin.pusat.program.tambah', compact('program'));
    }

    public function update(Request $request, ImageService $imageService, $id) {

        $data = $request->validate([
            'NamaProgram' => [new Required(), new StringField(), 'max:50'],
            'Tempat' => [new Required(), new StringField(), 'max:70'],
            'Persatuan_ID' => [new Required(), new StringField(), 'max:30'],
            'StartDate' => ['nullable', 'date'],
            'EndDate' => ['nullable', 'date'],
            'JenisProgram' => [new Required(), new StringField(), 'max:50'],
            'Majlis' => [new Required(), new StringField(), 'max:50'],
            'Link' => [new Required(), new StringField(), 'max:50'],
            'Mode' => [new Required(), 'string', 'max:50', 'in:Peserta,Penggerak'],
        ]);

        $imageValidate = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:10240'],
        ]);

        $program = program::find($id);

        if ($request->hasFile('image')) {
            if ($program->Image_ID) {
                $imageService->delete($program->Image_ID);
            }

            $newImage = $imageService->upload($request->file('program'), 'produk', $program, 'Thumbnail');
            $program->update(['Image_ID' => $newImage->id]);
        }

        return redirect()->route('admin.program.index')->with('success', 'Program berjaya dikemaskini');
    }
}
