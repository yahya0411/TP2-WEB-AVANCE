<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'URL',
        'Id_Produit',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
