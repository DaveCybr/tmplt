<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Menampilkan formulir login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Metode ini akan mengatur lokasi yang akan diarahkan setelah berhasil login
    protected function redirectTo()
    {
        return '/home'; // Ganti '/home' dengan lokasi yang Anda inginkan.
    }
}
