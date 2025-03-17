<?php

namespace App\Http\Controllers;

use App\Models\daftarProgram;
use App\Models\program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarProgramController extends Controller
{
    public function index($slug)
    {
        $program = program::where('Slug',$slug)->first();        

        if($program->Status == "Tidak Aktif")
        {
            return back()->withErrors('Program tidak aktif');
        }
        return view('guest.program.index', compact('program'));
    }

    public function create($id, $slug)
    {
        $program = program::find($id);

        if($program->Status == "Tidak Aktif")
        {
            return back()->withErrors('Program tidak aktif');
        }
        
        return view('guest.program.daftar', compact('program'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Program_ID' => ['required', 'string', 'max:40'],
            'Persatuan' => ['required', 'string', 'max:30'],
            'NamaPenuh' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'NoIC' => ['required', 'string', 'regex:/^\d{12}$/'],
            'NoPhone' => ['required', 'string', 'regex:/^01[0-9]\d{7}$/'],
            'NoPhonePenjaga' => ['required', 'string', 'regex:/^01[0-9]\d{7}$/'],
            'Alamat' => ['required', 'string', 'max:255'],
            'Alahan' => ['nullable', 'string', 'max:100'],
            'Jawatan' => ['nullable', 'string', 'max:100'],
        ], [
            'Program_ID.required' => 'Program ID wajib diisi.',
            'Program_ID.string' => 'Program ID mesti dalam bentuk teks.',
            'Program_ID.max' => 'Program ID tidak boleh melebihi 40 aksara.',

            'email.required' => 'Emel wajib diisi.',            

            'Persatuan.required' => 'Nama persatuan wajib diisi.',
            'Persatuan.string' => 'Nama persatuan mesti dalam bentuk teks.',
            'Persatuan.max' => 'Nama persatuan tidak boleh melebihi 30 aksara.',

            'NamaPenuh.required' => 'Nama penuh wajib diisi.',
            'NamaPenuh.string' => 'Nama penuh mesti dalam bentuk teks.',
            'NamaPenuh.max' => 'Nama penuh tidak boleh melebihi 100 aksara.',

            'NoIC.required' => 'Nombor IC wajib diisi.',
            'NoIC.string' => 'Nombor IC mesti dalam bentuk teks.',
            'NoIC.regex' => 'Format NoIC tidak sah. Contoh: 990101011234.',

            'NoPhone.required' => 'Nombor telefon wajib diisi.',
            'NoPhone.string' => 'Nombor telefon mesti dalam bentuk teks.',
            'NoPhone.regex' => 'Format nombor telefon tidak sah. Contoh: 0123456789.',

            'NoPhonePenjaga.required' => 'Nombor telefon penjaga wajib diisi.',
            'NoPhonePenjaga.string' => 'Nombor telefon penjaga mesti dalam bentuk teks.',
            'NoPhonePenjaga.regex' => 'Format nombor telefon penjaga tidak sah. Contoh: 0123456789.',

            'Alamat.required' => 'Alamat wajib diisi.',
            'Alamat.string' => 'Alamat mesti dalam bentuk teks.',
            'Alamat.max' => 'Alamat tidak boleh melebihi 255 aksara.',

            'Alahan.string' => 'Maklumat alahan mesti dalam bentuk teks.',
            'Alahan.max' => 'Maklumat alahan tidak boleh melebihi 100 aksara.',

            'Jawatan.string' => 'Jawatan mesti dalam bentuk teks.',
            'Jawatan.max' => 'Jawatan tidak boleh melebihi 100 aksara.',
        ]);

        $program = program::find($data['Program_ID']);

        if(!$program)
        {
            return back()->withErrors('Program tidak sah');
        }

        $create = daftarProgram::create($data);

        $create->notify(new \App\Notifications\DaftarProgram($program));

        if(!Auth::guard('web')->check())
        {
            return $create
            ? redirect()->route('guest.program.daftar')->with('success', 'Program berjaya didaftarkan')
            : back()->withErrors('Program tidak berjaya didaftarkan');
        }
        else
        {
            return $create
            ? redirect()->route('guest.program.daftar')->with('success', 'Program berjaya didaftarkan')
            : back()->withErrors('Program tidak berjaya didaftarkan');
        }        
    }
}
