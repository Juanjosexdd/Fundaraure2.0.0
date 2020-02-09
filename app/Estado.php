<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
    	'nombre',
		'abreviado',
		'codpais'
    ];

    public function pais()
	{
		return $this->belongsTo(Pais::class);
	}
	public function municipio()
    {
    	return $this->hasMany(Municipio::class);
    }
}
