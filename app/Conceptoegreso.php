<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conceptoegreso extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function movingresoegreso(){
        return $this->hasMany(Movingresoegreso::class);
    }
}
