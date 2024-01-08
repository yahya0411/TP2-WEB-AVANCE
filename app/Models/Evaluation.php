<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Evaluation ';
    protected $fillable = [
        'Id_Produit',
        'type_evaluation',
        'commentaire',
        'Note',
        'id_artisan',
        'Id_Livreur',
        'Id_Consommateur'
       ];
    
       public function artisan()
        {
            return $this->belongsTo(Artisan::class , 'id_artisan');
        }
    
        public function produit()
         {
            return $this->belongsTo(Produit::class , 'Id_Produit');
         }
    
        public function livreur()
        {
            return $this->belongsTo(Livreur::class);
        }
    
        public function consommateur()
        {
            return $this->belongsTo(Consommateur::class , 'Id_Consommateur');
        }
    
}
