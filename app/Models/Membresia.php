<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;
    public function producto_servicios(){
        return $this->hasOne(ProductoServicio::class);
    }
}
