<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientescoberturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientescoberturas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Codigo');
          $table->string('Descripcion');
          $table->string('PlanCodigo');
          $table->string('PlanDescripcion');
          $table->string('NumeroAfiliado');
          $table->string('TipoContratacionCodigo');
          $table->string('TipoContratacionDescripcion');
          $table->unsignedinteger('paciente_id')->unsigned();
          $table->timestamps();

          $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientescoberturas');
    }
}
