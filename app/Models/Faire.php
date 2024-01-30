<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faire extends Model
{
    use HasFactory;
    protected $table = 'faires';
    public function consommateur()
    {
        return $this->belongsTo(Consommateur::class, 'Id_Consommateur');
    }

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class, 'Id_Evaluation');
    }
}
