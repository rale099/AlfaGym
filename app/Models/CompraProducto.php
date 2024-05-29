<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{
    use HasFactory;
    public function proveedores(){
        return $this->hasMany(Proveedor::class);
    }
    public function detalle_compras(){
        return $this->belongsTo(DetalleCompra::class);
    }
    
}
