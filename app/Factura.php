<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='factura';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'impuesto',
    	'estado'

    	
    ];
}
