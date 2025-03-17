<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {        
        return view('admin.login');
    }

    public function log_perform(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        // if (!Auth::guard('admin')->check()) {
        //     return redirect()->back()->withErrors('Unauthorized access.');
        // }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            $admin = Auth::guard('admin')->user();
            if ($admin->AccType == 'Pusat') 
            {
                return redirect()->intended(route('indexAdmin'));
            } 
            elseif ($admin->AccType == 'Cawangan') 
            {
                return redirect()->intended(route('indexCawangan'));
            } 
        }       

        return back()->withErrors(['email' => 'The provided credentials do not match our records.',]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function indexPusat()
    {
        return view('admin.pusat.index');
    }

    public function indexCawangan()
    {
        return view('admin.cawangan.index');        
    }
}
