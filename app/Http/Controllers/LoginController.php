<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        return view('login.show');
    }


    public function signin(Request $request) {
        $login = $request->login;
        $password = $request->password;

        $credentials = ['email'=>$login,'password'=>$password];

        if(Auth::attempt($credentials)){
            //connected
            $request->session()->regenerate();
            return to_route('homepage')->with('success','Login successed!');
        }else{
            return back()->withErrors([
                'email'=>'Email ou mot de passe est incorrecte'
            ])->onlyInput('login');
        }
    }


    public function logout(){
        session()->flush();
        // session::flush();
        Auth::logout();
        return to_route('signin')->with('success','Account deconnected.');
    }
}
