<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;

class calculretraite extends Controller
{
    public function calcul(){
        return view('calcul');
    }
    public function plus(){
        $infos=info::all();
        return view('infos',compact('infos'));
    }
    public function destroy(info $info){
        $info->delete();
        return redirect()->route('plus.info');
    }
}
