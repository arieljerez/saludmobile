<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('historia_clinica');
          $table->string('documento');
          $table->string('email');
          $table->date('fecha_nacimiento');
          $table->unsignedinteger('user_id')->unsigned();
          $table->enum('sexo',['M','F']);
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientes');
    }
}
