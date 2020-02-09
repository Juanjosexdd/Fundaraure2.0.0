<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->bigIncrements('id');


	        $table->string('nombre', 30);
            $table->string('abreviado', 10);
            $table->unsignedBigInteger('codparroquia');
            $table->enum('estatus', ['Activo','Inactivo'])->defaul('Activo');            


            $table->timestamps();


            /**
             * Relacion
             */
            $table->foreign('codparroquia')
                  ->references('id')
                  ->on('parroquias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
