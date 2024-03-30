<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'country_id','_token']; 
   
        public function cities()
        {
            return $this->hasMany(City::class);
        }
    
        public function streets()
        {
            return $this->hasManyThrough(Street::class, City::class);
        }
    }


