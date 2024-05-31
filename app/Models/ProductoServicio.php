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
    public function membresias(){
        return $this->belongsTo(Membresia::class);
    }
    public function inventarios(){
        return $this->hasOne(Inventario::class);
    }
}
