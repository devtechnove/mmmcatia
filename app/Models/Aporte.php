<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    use HasFactory;


    /*
    |
    | ** Relationships model **
    |
    */

    public function tipoaporte()
    {
        return $this->belongsTo('App\Models\TipoAporte','tipo_aporte_id');
    }
}
