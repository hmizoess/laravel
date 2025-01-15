<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\info;

class compte extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
    ];
    public function info(){
        return $this->belongsTo(info::class);
    }
}
