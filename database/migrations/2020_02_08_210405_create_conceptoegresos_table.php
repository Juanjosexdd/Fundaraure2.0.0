<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptoegresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptoegresos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre', 30);
            $table->string('descripcion', 60);
            $table->enum('estatus', ['Activo','Inactivo'])->defaul('Activo');

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
        Schema::dropIfExists('conceptoegresos');
    }
}
