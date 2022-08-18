<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofrenda extends Model
{
    use HasFactory;



     public function diaservicio(){
        return $this->belongsTo(DiaServicio::class, 'dia_servicio_id');
    }
}
