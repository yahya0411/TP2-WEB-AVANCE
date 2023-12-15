<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    protected $fillable = [
        'nom_artisan', 
        'téléphone',
        'Email', 
    ];
}
