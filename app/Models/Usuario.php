<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->hasMany(Usuario::class);
    }
    public function roles(){
        return $this->hasMany(Rol::class);
    }
    public function membresias(){
        return $this->hasMany(Membresia::class);
    }
    public function sucursales(){
        return $this->hasMany(Sucursal::class);
    }
}
