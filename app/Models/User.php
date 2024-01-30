<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = [
        'Email', 
        'mdps',
        'Role',
        
    ];
    protected $primaryKey = 'id_user';

    public function consommateur()
    {
       return $this->hasOne(Consommateur::class, 'ID_User');
    }
    public function artisan()
    {
       return $this->hasOne(Artisan::class, 'ID_User');
     }
     public function livreur()
     {
        return $this->hasOne(Livreur::class, 'ID_User');
      }
      public function isArtisan()
      {
          return $this->Role === 'Artisan';
      }
      public function isConsommateur()
      {
          return $this->Role === 'Consommateur';
      }
      public function isLivreur()
      {
          return $this->Role === 'Livreur';
      }
      
}
