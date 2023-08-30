<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;
    protected $fillable = [
        'u_e_id','etudiant_id','date','duree','heure','note'

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
