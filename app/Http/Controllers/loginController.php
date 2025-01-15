<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function affich(){
        return view('afficher');
    }
    public function login(Request $request){
        $login=$request->login;
        $password=$request->password;
        $credentials=['email'=>$login,"password"=>$password];
        //dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('home');
        }
        else{
            return back()->withErrors([
                'login'=>'email ou mot de passe incorrecte'
            ])->onlyInput('email');
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login.afficher')->with('success','bien');
    }
}
