<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login_GET()
    {
        return view('admin.auth.login');
    }

    public function Login_POST(Request $request)
    {
        
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:25'
        ]);

        if ( $x = Auth::attempt(['email' => $request->email, 'password' => $request->password]) ) {
       
            return redirect('/admin');
        }

        return redirect()->back()->with('error', 'E-Posta veya Şifre hatalı, lütfen tekrar deneyin.')->withInput();
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
