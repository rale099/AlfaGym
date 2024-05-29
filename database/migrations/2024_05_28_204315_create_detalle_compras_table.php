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
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('cantidad_total', 8, 2);
            $table->unsignedBigInteger('compra_producto_id');
            $table->foreign('compra_producto_id')->references('id')->on('compra_productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_compras');
    }
};
