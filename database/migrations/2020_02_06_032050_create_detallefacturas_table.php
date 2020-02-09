<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallefacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallefacturas', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->unsignedBigInteger('nrofactura');
            $table->unsignedBigInteger('codservicio');
            $table->integer('preciounitario');
            $table->integer('porcentajedscto');
            $table->integer('totalitem');


            $table->timestamps();

            $table->foreign('nrofactura')
                  ->references('id')
                  ->on('encabezadofacturas');

            $table->foreign('codservicio')
                  ->references('id')
                  ->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallefacturas');
    }
}
