<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_paciente');
            $table->string('impuesto');
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_paciente')->references('id_persona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura', function (Blueprint $table){
            $table->dropForeign('factura_id_paciente_foreign');
        });
    }
}
