<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = [
		'cedula',
        'rif',
        'nombres',
        'apellidos',
        'telefono',
        'email',
		'direccion',
		'codtipocliente',
		'codsector'
	];

    public function sector()
	{
		return $this->belongsTo(Sector::class);
	}
	public function tipocliente()
	{
		return $this->belongsTo(Tipocliente::class);
	}
}
