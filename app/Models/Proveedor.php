<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    use HasFactory;
    public function compra_productos(){
        return $this->hasMany(CompraProducto::class);
    }
}
