<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('cedula', 20);
            $table->string('rif');
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('telefono', 20);
            $table->string('email');
            $table->string('direccion', 120);
            $table->enum('estatus', ['Activo','Inactivo'])->defaul('Activo');            


            // $table->unsignedBigInteger('codpais');
            // $table->unsignedBigInteger('codestado');
            // $table->unsignedBigInteger('codmunicipio');
            // $table->unsignedBigInteger('codparroquia');
            $table->unsignedBigInteger('codtipocliente');
            $table->unsignedBigInteger('codsector');
            $table->timestamps();


            /**
             * Relacion
             */
            // $table->foreign('codpais')
            //       ->references('id')
            //       ->on('pais');
            // $table->foreign('codestado')
            //       ->references('id')
            //       ->on('estados');
            // $table->foreign('codmunicipio')
            //       ->references('id')
            //       ->on('municipios');
            // $table->foreign('codparroquia')
            //       ->references('id')
            //       ->on('parroquias');
            // $table->foreign('codsector')
            //       ->references('id')
            //       ->on('sectors');
            $table->foreign('codtipocliente')
                  ->references('id')
                  ->on('tipoclientes');
            $table->foreign('codsector')
                  ->references('id')
                  ->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
