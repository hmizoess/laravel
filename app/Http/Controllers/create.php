<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compte;
use Illuminate\Support\Facades\Hash;

class create extends Controller
{
    public function create(){
        return view('creation');
    }
    public function store(Request $request){
        //dd($request);
       $name=$request->name;
        $email=$request->email;
        $password=Hash::make($request->password);

        $request->validate([
            'name' => 'required|string|max:255',
        'email' => 'required|email|unique:comptes,email|max:255',
        'password' => 'required|string|min:8', 
        ]);

        compte::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        ]);
        return redirect()->route('login.afficher')->with('success','votre compte est bien crée.');
    }
}
