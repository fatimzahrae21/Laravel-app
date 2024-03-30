<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre','prix','date_publication','_token','autheur_id']; 

     /**
     * Get all of the authors for the Author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autheurs()
    {
        return $this->hasOne(Autheur::class); 
    }

} 
