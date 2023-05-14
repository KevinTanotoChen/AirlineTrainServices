<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function show()
    {
        // Redirect::setIntendedUrl(url()->previous());
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $url = $request->input('url');
            $url_next = $request->input('url_next');
            // dd($url);
            // dd($url);
            // return redirect($url);
            // return back();
            // dd(redirect()->intended('/'));
            return redirect()->intended('/');
            // return redirect()->back();
        }

        return redirect('/login')->with('invalid', 'Invalid Credential');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
