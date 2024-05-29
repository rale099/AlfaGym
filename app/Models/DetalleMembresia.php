<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleMembresia extends Model
{
    use HasFactory;
    public function detallem(){
        return $this->hasMany(DetalleMembresia::class);
    }
}
