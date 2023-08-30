<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveaux extends Model
{
    use HasFactory;
    protected $table = 'niveaux';


    protected $fillable = [
        'libelet'

    ];
    protected $attributes = [



    ];
    public function etudiants()

    {
        return $this->hasMany(etudiants::class);
    }
}
