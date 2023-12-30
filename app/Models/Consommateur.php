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
    public function faires()
    {
        return $this->hasMany(Faire::class, 'Id_Consommateur');
    }

}
