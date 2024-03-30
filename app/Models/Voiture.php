<?php

namespace App\Models;
use App\Models\Moteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['marque','color'];
    function moteur(){
        return $this->hasOne(Moteur::class);
    }
}
