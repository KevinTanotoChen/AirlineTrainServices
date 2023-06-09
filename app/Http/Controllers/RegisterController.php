<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    public function show()
    {
        $lang = session('lang', 'en');
        App::setlocale(session('lang'));
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|unique:users',
            'password' => 'required|min:8|max:20',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9'
        ]);


        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/login')->with('success', 'Your account successfully registered!');
    }
}
