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
        return $this->HasMany(Image::class , 'Id_image');
    }
    public function evaluations()
    {
        return $this->HasMany(Evaluation::class , 'Id_Evaluation');
    }
}
