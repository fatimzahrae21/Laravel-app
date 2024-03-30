<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Autheur extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'date_naissance' , '_token']; 
   
    /**
     * Get all of the books for the Author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function livres(): HasMany
    {
        return $this->hasMany(Livre::class);
    }
}
