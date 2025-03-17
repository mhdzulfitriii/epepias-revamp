<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        $program = program::where('Status', 'Aktif')->get();
        return view('guest.index', compact('program'));
    }

    public function pimpinan() {
        return view('guest.pimpinan');
    }
}
