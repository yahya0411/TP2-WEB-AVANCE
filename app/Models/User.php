<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Authenticatable
{
    use AuthenticatableTrait;

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
