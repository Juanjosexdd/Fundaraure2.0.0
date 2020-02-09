<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipocliente extends Model
{
    protected $fillable=[
    	'nombre',
    	'estatus'
    ];

    public function tipocliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
