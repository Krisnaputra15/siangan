<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function registerProcess(Request $request){
        // return $request;
        $create = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama_lengkap,
            'password' => $request->password,
            'no_hp' => $request->no_telp,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'BEM' => $request->isBEM == 1 ? true : false
        ]);

        Auth::login($create);

        return redirect()->route('home');
    }

    public function loginProcess(Request $request){
        $user = Mahasiswa::where('nim', $request->nim)->where('password', $request->password)->first();

        if($user){
            Auth::login($user);
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
