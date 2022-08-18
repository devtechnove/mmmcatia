<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioTeologico extends Model
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

    
}
