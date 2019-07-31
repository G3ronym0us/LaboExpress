<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table='detalles_factura';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable =[
    	'id_factura',
    	'id_examen',
    	'cantidad',
    ];
    protected $guarded =[
    ];
}
