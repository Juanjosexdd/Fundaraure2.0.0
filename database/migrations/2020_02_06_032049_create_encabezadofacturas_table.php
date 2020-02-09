<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncabezadofacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezadofacturas', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->unsignedBigInteger('codcliente');
            $table->string('observaciones', 100);
            $table->unsignedDecimal('total');
            $table->unsignedDecimal('dsctototal');
            $table->unsignedDecimal('nrocontrolseniat');
            $table->unsignedDecimal('ivstotal');
            $table->unsignedBigInteger('codformapago');
            $table->string('otrasobservaciones', 100);
            $table->unsignedBigInteger('codestatusfactura');


            $table->timestamps();

            $table->foreign('codcliente')
                  ->references('id')
                  ->on('clientes');

            $table->foreign('codformapago')
                  ->references('id')
                  ->on('formapagos');

            $table->foreign('codestatusfactura')
                  ->references('id')
                  ->on('estatusfacturas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encabezadofacturas');
    }
}
