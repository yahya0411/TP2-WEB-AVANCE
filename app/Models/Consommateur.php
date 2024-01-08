<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consommateur extends Model
{
    protected $fillable = [
        'nom_consommateur', 
        'prénom_consommateur',
        'téléphone',
        'adresse',
        'Email',
        
    ];
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class , 'Id_Consommateur');
    }

}
