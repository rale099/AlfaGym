<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Navar Elenor',
            'email' => 'navarelenor@gmail.com',
            'password' => bcrypt('123456789'),
            'codigo' => 'ne24001',
            'membresia_id' => '1',
            'sucursal_id' => '1',
            
        ])->assignRole('admin');

        User::create([
            'name' => 'Mang Navar',
            'email' => 'mangnavar@gmail.com',
            'password' => bcrypt('123456789'),
            'codigo' => 'mn24001',
            'membresia_id' => '2',
            'sucursal_id' => '1',
        ])->assignRole('usuario');

        User::create([
            'name' => 'Xenover Navar',
            'email' => 'xenovernavar@gmail.com',
            'password' => bcrypt('123456789'),
            'codigo' => 'xn24001',
            'membresia_id' => '2',
            'sucursal_id' => '1',
        ]);
    }
    /*
    $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('codigo', 7);
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedBigInteger('detalle_membresia_id');
            $table->foreign('detalle_membresia_id')->references('id')->on('detalle_membresias');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
    */
}
