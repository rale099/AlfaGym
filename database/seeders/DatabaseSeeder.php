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
            DB::table('equipos')->insert([
                'id' => 1,
                'tipo' => 'Equipo',
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Mancuerna',
                'peso' => 10,
                'cantidad' => 3,
                'equipo_id' => 1,
            ]);
            
            //Datos Productos y Servicios
            DB::table('categorias')->insert([
                'id' => 1,
                'nombre' => 'Energizante',
            ]);
            DB::table('categorias')->insert([
                'id' => 2,
                'nombre' => 'Hidratante',
            ]);
            
            //inventarios
            DB::table('inventarios')->insert([
                'id' => 1,
                'stock'=> 50,
                'stock_minimo'=> 10,
                'categoria_id'=> 1
            ]);
            DB::table('inventarios')->insert([
                'id' => 2,
                'stock'=> 50,
                'stock_minimo'=> 10,
                'categoria_id'=> 2
            ]);
            DB::table('inventarios')->insert([
                'id' => 3,
                'stock'=> 50,
                'stock_minimo'=> 10,
                'categoria_id'=> 2
            ]);
            
            //membresias
            DB::table('membresias')->insert([
                'duracion'=> 15
            ]);
            DB::table('membresias')->insert([
                'duracion'=> 30
            ]);
            DB::table('tipos')->insert([
                'id' => 1,
                'nombre'=>'Producto'
            ]);
            DB::table('tipos')->insert([
                'id' => 2,
                'nombre'=>'Mebresia'
            ]);
            
            //productos
            DB::table('producto_servicios')->insert([
                'id' => 1,
                'nombre' => 'Raptor',
                'precio_unitario' => 1.25,
                'tipo_id' => 1,
                'inventario_id'=> 1,
            ]);
            DB::table('producto_servicios')->insert([
                'id' => 2,
                'nombre' => 'Gatorade',
                'precio_unitario' => 1.25,
                'tipo_id' => 1,
                'inventario_id'=> 2,
            ]);
            DB::table('producto_servicios')->insert([
                'id' => 3,
                'nombre' => 'Membresia 15 días',
                'precio_unitario' => 6.00,
                'tipo_id' => 2,
                'membresia_id' => 1
            ]);
            DB::table('producto_servicios')->insert([
                'id' => 4,
                'nombre' => 'Membresia 30 días',
                'precio_unitario' => 12.00,
                'tipo_id' => 2,
                'membresia_id' => 2
            ]);
            DB::table('producto_servicios')->insert([
                'id' => 5,
                'nombre' => 'Agua',
                'precio_unitario' => 0.15,
                'tipo_id' => 1,
                'inventario_id'=> 3,
            ]);
            //Ventas y Detalles
            DB::table('ventas')->insert([
                'fecha' => Carbon::create('2024', '05','21')->toDateString(),
                'valor_total' => 2.20,
            ]);
            DB::table('ventas')->insert([
                'fecha' => Carbon::create('2024', '06','21')->toDateString(),
                'valor_total' => 5.50,
            ]);
            DB::table('detalle_ventas')->insert([
                'cantidad' => 2,
                'precio_unitario' => 1.10,
                'venta_id' => 1,
                'producto_servicio_id' => 1,
            ]);
            DB::table('detalle_ventas')->insert([
                'cantidad' => 7,
                'precio_unitario' => 1.10,
                'venta_id' => 1,
                'producto_servicio_id' => 1,
            ]);
            DB::table('detalle_ventas')->insert([
                'cantidad' => 5,
                'precio_unitario' => 1.10,
                'venta_id' => 2,
                'producto_servicio_id' => 2,
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

            $this->call([
                RoleSeeder::class
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
