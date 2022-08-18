<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FotoMiembro;

class Miembro extends Model
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



    public function tipodemiembro()
    {
        return $this->belongsTo('App\Models\TipoMiembro','tipo_miembro_id');
    }

     public function tipodesangre()
    {
        return $this->belongsTo('App\Models\TipoDeSangre','tipo_sangre_id');
    }

     public function sociedad()
    {
        return $this->belongsTo('App\Models\Sociedades','sociedad_id');
    }

     public function tmiembro()
    {
        return $this->belongsTo('App\Models\TipoMiembro','tipo_miembro_id');
    }

     public function estado()
    {
        return $this->belongsTo('App\Models\Estados','estado_id');
    }

    public function parroquia()
    {
        return $this->belongsTo('App\Models\Parroquias','parroquia_id');
    }


     public function municipio()
    {
        return $this->belongsTo('App\Models\Municipios','municipio_id');
    }


     public function generos()
    {
        return $this->belongsTo('App\Models\Genero','genero_id');
    }

     public function ecivil()
    {
        return $this->belongsTo('App\Models\EstadoCivil','estado_civil_id');
    }

    public function nacionalidad()
    {
        return $this->belongsTo('App\Models\Nacionalidades','nacionalidad_id');
    }

    public function gradoi()
    {
        return $this->belongsTo('App\Models\GradoInstruccion','grado_instruccion_id');
    }

     public function getDisplayNameAttribute()
     {
         return trim(str_replace( '  ', ' ',  "{$this->name} {$this->lastname}")) ;
     }

     public function fotoMiembros()
     {
         return $this->hasOne('App\Models\FotoMiembro','miembro_id');
     }
}
