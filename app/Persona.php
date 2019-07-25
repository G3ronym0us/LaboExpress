<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='personas';

    protected $primaryKey='id_persona';

    public $timestamps=false;

    protected $fillable = [
    	'nombres',
    	'apellidos',
    	'cedula',
    	'sexo',
    	'correo',
    	'telefono',
    	'tipo_persona'
    ];
}
