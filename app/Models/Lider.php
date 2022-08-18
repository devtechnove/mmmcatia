<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    use HasFactory;

     /*
    |
    | ** Relationships model **
    |
    */

    public function miembro()
    {
        return $this->belongsTo('App\Models\Miembro','miembro_id');
    }

    public function liderazgo()
    {
        return $this->belongsTo('App\Models\TipoLider','tipo_lider_id');
    }
}
