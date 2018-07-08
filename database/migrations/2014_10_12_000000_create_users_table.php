<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo', 250);
            $table->date('fecha_nacimiento');
            $table->string('genero', 9);
            $table->enum('tipo', ['Paciente', 'Medico', 'Admin'])->default('paciente');
            $table->string('username', 30)->unique();
            $table->string('password', 60);
            $table->string('telefono', 15);
            $table->string('celular', 15);
            $table->string('correo', 100)->unique();
            $table->text('direccion');
            $table->string('dui');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
