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
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('password');
            $table->string('fecha_nacimiento');
            $table->string('curp');
            $table->string('rfc');
            $table->string('calle');
            $table->string('colonia');
            $table->string('exterior');
            $table->string('interior');
            $table->string('codigo_postal');
            $table->string('entre_calles');
            $table->string('fecha_vencimiento');
            $table->string('deuda');
            $table->string('estado_cuenta');
        });
        Schema::create('debito', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('numero_tarjeta');
            $table->string('fecha_vencimiento');
            $table->string('tipo_tarjeta');
        });
        Schema::create('credito', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('numero_cliente');
            $table->string('rfc');
            $table->string('curp');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
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
        Schema::dropIfExists('debito');
        Schema::dropIfExists('credito');
    }
}
