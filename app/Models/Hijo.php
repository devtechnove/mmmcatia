<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    use HasFactory;


     /*
    |
    | ** Relationships model **
    |
    */

    public function pais()
    {
        return $this->belongsTo('App\Models\Pais','pais_id');
    }

    public function padre()
    {
        return $this->belongsTo('App\Models\Miembro','miembro_id');
    }

    public function tipodemiembro()
    {
        return $this->belongsTo('App\Models\TipoMiembro','tipo_miembro_id');
    }

     public function sociedad()
    {
        return $this->belongsTo('App\Models\Sociedades','sociedad_id');
    }

     public function getDisplayNameAttribute()
     {
         return trim(str_replace( '  ', ' ',  "{$this->name} {$this->lastname}")) ;
     }
}
