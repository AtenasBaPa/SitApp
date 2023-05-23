<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*Se especifica el schema de la tabla posts junto con sus columnas y su tipo de dato*/
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('no_licencia_frente');
            $table->string('licencia_frente')->nullable();
            $table->string('no_licencia_reverso');
            $table->string('licencia_reverso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
