<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    public function ventas(){
        return $this->belongsTo(Venta::class, 'venta_id', 'id');
    }
    public function producto_servicios(){
        return $this->belongsTo(ProductoServicio::class, 'producto_servicio_id', 'id');
    }
}
