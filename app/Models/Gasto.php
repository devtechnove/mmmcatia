<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;




    /*
    |
    | ** Relationships model **
    |
    */

    public function tipogasto()
    {
        return $this->belongsTo('App\Models\TipoGasto','tipo_gasto_id');
    }
}
