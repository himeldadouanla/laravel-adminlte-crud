<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivres extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id','u_e_id','duree','date'

    ];
    protected $attributes = [


    ];
    public function UE()
    {
        return $this->belongsTo(UEs::class);
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiants::class);
    }
}
