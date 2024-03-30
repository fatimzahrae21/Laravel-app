<?php

namespace App\Models;
use App\Models\Formateur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom','filiere'];
    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class);
    }
}
