<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function calculerRetraite(Request $request)
{
    $ageActuel = $request->input('age_actuel');
    $salaireActuel = $request->input('salaire_actuel');
    $anneesCotisation = $request->input('annees_cotisation');
    $ageRetraite = $request->input('age_retraite');

    $request->validate([
        'age_actuel' => 'required|integer',
        'salaire_actuel' => 'required|integer',
        'annees_cotisation' => 'required|integer',
        'age_retraite' => 'required|integer',
    ]);
    info::create([
        'age_actuel'=>$ageActuel,
        'salaire_actuel'=>$salaireActuel,
        'annees_cotisation'=>$anneesCotisation,
        'age_retraite'=>$ageRetraite,
    ]);

   /* 
    $ageActuel = $request->input('age_actuel');
    $salaireActuel = $request->input('salaire_actuel');
    $anneesCotisation = $request->input('annees_cotisation');*/

    
    $retraiteEstimee = $salaireActuel * 0.5;  
    if ($anneesCotisation > 30) {
        $retraiteEstimee *= 1.2;  
    }

    $anneesRestantes = $ageRetraite - $ageActuel;
    return view('resultat', ['retraiteEstimee' => $retraiteEstimee,'anneesRestantes' => $anneesRestantes]);
}
}
