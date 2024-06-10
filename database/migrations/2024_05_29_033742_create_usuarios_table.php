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
        /*Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->string('correo', 80);
            $table->string('contrasena', 80);
            $table->char('codigo', 7);
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedBigInteger('detalle_membresia_id');
            $table->foreign('detalle_membresia_id')->references('id')->on('detalle_membresias');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->timestamps();
        });
        */
        Schema::table('users', function (Blueprint $table) {
            $table->char('codigo', 7)->nullable();
            $table->unsignedBigInteger('membresia_id')->nullable();
            $table->foreign('membresia_id')->constrained()->onUpdate('cascade')->references('id')->on('membresias');
            $table->unsignedBigInteger('sucursal_id')->nullable();
            $table->foreign('sucursal_id')->constrained()->onUpdate('cascade')->references('id')->on('sucursales');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->constrained()->onUpdate('cascade')->references('id')->on('roles');
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
