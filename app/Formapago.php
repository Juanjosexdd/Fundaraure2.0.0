<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formapago extends Model
{
    protected $fillable = [
        'nombre',
        'abreviado'
    ];

    public function encabezado (){
        return $this->hasMany(Encabezadofactura::class);
    }
}
