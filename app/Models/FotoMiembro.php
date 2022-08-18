<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoMiembro extends Model
{
    use HasFactory;

    /*
    |
    | ** Relationships model **
    |
    */

    public function miembros()
    {
        return $this->belongsTo('App\Models\Miembro','miembro_id');
    }
}
