<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Produit';
    public function artisan()
    {
        return $this->belongsTo(Artisan::class, 'id_artisan');
    }
    public function images()
    {
        return $this->hasMany(Image::class , 'Id_Produit');
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class , 'Id_Produit');
    }
    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'quantite_produits', 'Id_Produit', 'Id_Commande')
                    ->withPivot('quantité_demande');
    }
}
