<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculretraite extends Controller
{
    public function calcul(){
        return view('calcul');
    }
}
