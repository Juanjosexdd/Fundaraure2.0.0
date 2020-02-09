<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movingresoegreso extends Model
{
    protected $fillable = [
        'codconceptoegreso',
        'codctapote',
        'observacion',
    ];

    public function conceptoegreso(){
        return $this->belongsTo(Conceptoegreso::class);
    }
    public function cuentapote(){
        return $this->belongsTo(Cuentapote::class);
    }

}
