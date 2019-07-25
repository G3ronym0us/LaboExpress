<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_factura');
            $table->unsignedBigInteger('id_examen');
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('id_examen')->references('id')->on('exam');
            $table->foreign('id_factura')->references('id')->on('factura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_factura', function (Blueprint $table){
            $table->dropForeign('detalles_factura_id_examen_foreign');
            $table->dropForeign('detalles_factura_id_factura_foreign');
        });
    }
}
