<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UEs extends Model
{
    use HasFactory;
    protected $fillable = [
        'enseignant_id','libelet'

    ];
    protected $attributes = [



    ];
    public function enseignant()

    {
        return $this->belongsTo(Enseignants::class);
    }
}
