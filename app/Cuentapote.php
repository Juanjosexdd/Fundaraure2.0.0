<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentapote extends Model
{
    protected $fillable = [
        'nombre',
        'codcuenta'
    ];

    public function movingresoegreso(){
        return $this->hasMany(Movingresoegreso::class);
    }
}
