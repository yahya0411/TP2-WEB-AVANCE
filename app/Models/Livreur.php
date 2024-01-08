<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    protected $fillable = [
        'nom_livreur', 
        'prénom_livreur',
        'téléphone',
        'adresse',
        'Email',
    ];
    protected $primaryKey = 'Id_Livreur';
}
