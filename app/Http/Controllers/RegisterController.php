<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use session;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|max:255|email:dns|unique:users',
            'password' => 'required|max:255|min:5'
        ]);

        $validateddata['password'] = bcrypt($validateddata['password']);

        User::create($validateddata);
        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
}
