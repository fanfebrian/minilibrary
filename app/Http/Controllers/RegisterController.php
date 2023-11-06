<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Perpus | Daftar'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'max:100'],
            'username' => ['required', 'max:50', 'min:5', 'max:100', 'unique:users'],
            'email' => ['required', 'min:12', 'email', 'unique:users'],
            'password' => ['required', 'min:5']
        ]);
        // password hash
        $validateData['password'] = Hash::make($request->password);
        User::create($validateData);

        return redirect('/login')->with('success', "Selamat Anda Berhasil Membuat Akun");
    }
}
