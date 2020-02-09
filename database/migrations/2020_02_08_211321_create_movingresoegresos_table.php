<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovingresoegresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movingresoegresos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('codconceptoegreso');
            $table->unsignedBigInteger('codctapote');
            $table->string('observacion', 80);
            $table->enum('estatus', ['Activo','Inactivo'])->defaul('Activo');


            $table->foreign('codconceptoegreso')
                  ->references('id')
                  ->on('conceptoegresos');
            $table->foreign('codctapote')
                  ->references('id')
                  ->on('cuentapotes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movingresoegresos');
    }
}
