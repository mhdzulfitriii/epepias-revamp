<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('guest.index');
    }

    public function pimpinan() {
        return view('guest.pimpinan');
    }
}
