<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoServicio extends Model
{
    use HasFactory;
    public function tipos(){
        return $this->hasMany(Tipo::class);
    }
    public function producto_servicios(){
        return $this->hasMany(ProductoServicio::class);
    }
}
