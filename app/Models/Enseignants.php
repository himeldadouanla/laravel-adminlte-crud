<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignants extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','telephone','email','date_prise_fonction'

    ];
    protected $attributes = [



    ];
    public function UEs()

    {
        return $this->hasMany(UEs::class);
    }
}
