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
        DB::table('users')->insert([
            'name' => 'Navar Elenor',
            'email' => 'navarelenor@gmail.com',
            'password' => '123456789',
            'codigo' => 'ne24001',
            'membresia_id' => '1',
            'sucursal_id' => '1',
        ]);
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'editor']);
        $user = User::find(1);
        $user->role_id($role1);
        $user->save();
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
