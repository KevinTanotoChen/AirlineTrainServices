<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:20',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9'
        ]);
        dd("regist berhasil");
        // return request()->all();


        // $validatedData['password'] = bcrypt($validatedData['password']);

        // User::create($validatedData);
        // return redirect('/login')->with('success', 'Your account successfully registered!');
    }
}
