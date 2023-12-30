<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Evaluation';
    protected $fillable = ['Id_Produit'];
    
     public function faires()
     {
         return $this->hasMany(Faire::class, 'Id_Evaluation');
     }
}
