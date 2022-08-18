<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimonio extends Model
{
    use HasFactory;


      public function miembro()
    {
        return $this->belongsTo('App\Models\Miembro','miembro_id');
    }
}
