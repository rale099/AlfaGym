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
        /*
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->date('dia_semana');
            $table->date('desde');
            $table->date('hasta');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->timestamps();
        });
        */
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia_semana');
            $table->time('desde');
            $table->time('hasta');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
