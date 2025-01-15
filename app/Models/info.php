<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\compte;

class info extends Model
{
    use HasFactory;
    protected $fillable=[
        'age_actuel',
        'salaire_actuel',
        'annees_cotisation',
        'age_retraite'
    ];
    public function Compte(){
        return $this->hasOne(compte::class);
    }
}
