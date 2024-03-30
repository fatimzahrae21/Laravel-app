<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'city_id' , '_token']; 
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function streets()
    {
        return $this->hasMany(Street::class);
    }
    
}
