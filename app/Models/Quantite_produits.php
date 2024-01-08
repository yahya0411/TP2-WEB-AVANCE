<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantite_produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id_Produit', 
        'Id_Commande',
        'quantité_demande', 
    ];
    /*
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'Id_Commande');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'Id_Produit');
    }*/
}
