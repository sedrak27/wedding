<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function show()
    {
        if (session()->has('admin_auth')) {
            return redirect()->route('admin');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $password = $request->input('password');

        if ($password === env('ADMIN_PASSWORD', 'wedding2026')) {
            session(['admin_auth' => true]);
            return redirect()->route('admin');
        }

        return back()->withErrors(['password' => 'Սխալ գաղտնաբառ:']);
    }

    public function logout()
    {
        session()->forget('admin_auth');
        return redirect()->route('admin.login');
    }
}
