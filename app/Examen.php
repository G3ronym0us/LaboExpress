<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table='exam';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'costo'

    	
    ];
}
