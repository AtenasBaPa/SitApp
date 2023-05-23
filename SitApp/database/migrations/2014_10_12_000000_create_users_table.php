<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        /*Se especifica el schema de la tabla users junto con sus columnas y su tipo de dato*/
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('correo')->unique();
            $table->string('nombre')->unique();
            $table->string('password');
            $table->string('licencia')->unique();
            $table->string('tarjeta')->unique();
            $table->string('curp')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
