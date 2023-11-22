<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function create(Request $req){

        $validate = $this->validate($req, [ 
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',

        ] );

        $validate['password'] = bcrypt($req->password);

        User::create($validate);

        return redirect('login');
    }

    function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
