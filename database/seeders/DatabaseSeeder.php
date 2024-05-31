<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\CompraProducto;
use App\Models\DetalleCompra;
use App\Models\Inventario;
use App\Models\Membresia;
use App\Models\ProductoServicio;
use App\Models\Proveedor;
use App\Models\Tipo;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            /*Proveedores y Compras
            Proveedor::insert()([
                ''=>'',
                ''=>'',
            ]);
            CompraProducto::insert()([
                ''=>'',
                ''=>'',
            ]);
            DetalleCompra::insert()([
                'nombre'=>'',
                'precio_unitario'=>'',
                'cantidad_total'=>'',
                'compra_producto_id'=>'',
            ]);
            */

            
            //Datos Productos y Servicios
            DB::table('categorias')->insert([
                'nombre' => 'Energizante'
            ]);
            DB::table('inventarios')->insert([
                'stock'=>'50',
                'stock_minimo'=>'10',
                'categoria_id'=>'1'
            ]);
            DB::table('membresias')->insert([
                'duracion'=>'15'
            ]);
            DB::table('tipos')->insert([
                'nombre'=>'Producto'
            ]);
            DB::table('producto_servicios')->insert([
                'nombre' => 'Gatorade',
                'precio_unitario' => 1.25,
                'tipo_id' => 1,
            ]);
            
            //Ventas y Detalles
            DB::table('ventas')->insert([
                'fecha' => Carbon::create('2024', '05','21')->toDateString(),
                'valor_total' => 2.20,
            ]);
            DB::table('detalle_ventas')->insert([
                'cantidad' => '2',
                'precio_unitario' => 2.20,
                'venta_id' => '1',
                'producto_servicio_id' => '1',
            ]);
            
        
            //Roles, Sucursales y Usuarios
            DB::table('sucursales')->insert([
                'nombre' => 'AlfaFitnessGymAguilares',
                'direccion' => 'Aguilares',
            ]);

            //Tabla horarios
            $this->call([
                HorariosSeeder::class
            ]);
            
            DB::table('roles')->insert([
                'nombre' => 'admin',
            ]);
            DB::table('detalle_membresias')->insert([
                'fecha_inicio' => Carbon::create('2024', '04','01')->toDateString(),
                'fecha_final' => Carbon::create('2024', '04','15')->toDateString(),
                'estado' => 'I',
            ]);
            //Tabla usuarios
            $this->call([
                UsuarioSeeder::class
            ]);

            /*DB::table('comentarios')->insert([
                
            ]);
            DB::table('notificaciones')->insert([
                
            ]);*/
    }
}
