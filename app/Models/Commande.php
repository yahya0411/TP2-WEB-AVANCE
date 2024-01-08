<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_commande', 
        'adresse_livraison',
        'état_commande',
        'Id_Consommateur',
        'id_artisan',
        'Id_Livreur',
        
    ];
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'quantite_produits', 'Id_Commande', 'Id_Produit')
                     ->withPivot('quantité_demande');
    }
    public function artisan()
    {
        return $this->belongsTo(Artisan::class, 'id_artisan');
    }

    public function livreur()
    {
        return $this->belongsTo(Livreur::class, 'Id_Livreur');
    }

    public function consommateur()
    {
        return $this->belongsTo(Consommateur::class, 'Id_Consommateur');
    }
}
