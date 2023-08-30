<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $fillable = [
        'niveau_id', 'matricule','nom','prenom','date_de_naissance','lieu','telephone','email','annee_scolaire'

    ];
        protected $attributes = [

    ];

        public function UEs()
            {
                return $this->hasMany(UEs::class);
            }
        public function niveau()
            {
                return $this->belongsTo(Niveaux::class);
            }
}
