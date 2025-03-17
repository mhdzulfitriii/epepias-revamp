<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $AccType)
    {
        $admin = Auth::guard('admin')->user();

        if (Auth::guard('admin')->check() && $admin->AccType === $AccType && $admin->Status == true) {
            return $next($request);
        }

        return redirect()->route('login.view')->with('error', 'Your account has been block by Administration. Contact us for help');
    }
}
