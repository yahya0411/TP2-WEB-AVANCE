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
    protected $primaryKey = 'id_artisan';
    public function produits()
{
    return $this->hasMany(Produit::class, 'id_artisan');
}
}
