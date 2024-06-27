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
            DB::table('equipos')->insert([
                'id' => 1,
                'tipo' => 'Equipo',
            ]);
            DB::table('equipos')->insert([
                'id' => 2,
                'tipo' => 'Maquinaria',
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Mancuerna',
                'peso' => 10,
                'cantidad' => 3,
                'equipo_id' => 1,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Mancuerna',
                'peso' => 20,
                'cantidad' => 2,
                'equipo_id' => 1,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Mancuerna',
                'peso' => 30,
                'cantidad' => 3,
                'equipo_id' => 1,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Prensa de piernas',
                'cantidad' => 2,
                'equipo_id' => 2,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Hack',
                'cantidad' => 2,
                'equipo_id' => 2,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Poleas',
                'cantidad' => 2,
                'equipo_id' => 2,
            ]);
            DB::table('inventario_equipos')->insert([
                'nombre' => 'Maquina de hombros',
                'cantidad' => 2,
                'equipo_id' => 2,
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

            //Proveedores y Compras
            DB::table('proveedores')->insert([
                'id' => 1,
                'nombre'=>'Tienda Denis',
                'direccion'=>'a la vuelta',
                'telefono' => '75856509',
            ]);
            DB::table('proveedores')->insert([
                'id' => 2,
                'nombre'=>'Agroferreteria',
                'direccion'=>'a la par',
                'telefono' => '75076462',
            ]);
            DB::table('compra_productos')->insert([
                'id' => 1,
                'valor_total'=> 20.00,
                'proveedor_id'=> 1,
            ]);
            DB::table('compra_productos')->insert([
                'id' => 2,
                'valor_total'=> 10.00,
                'proveedor_id'=> 2,
            ]);
            DB::table('detalle_compras')->insert([
                'id' => 1,
                'cantidad_total'=> 2,
                'compra_producto_id'=>1,
            ]);
            DB::table('detalle_compras')->insert([
                'id' => 2,
                'cantidad_total'=> 1,
                'compra_producto_id'=>2,
            ]);

            DB::table('comentario_clientes')->insert([
                'comentario' => 'Se necesita mantenimiento en la maquina de hombro',
                'fecha_comentario' => Carbon::create('2024', '06','17')->toDateString(),
                'user_id' => 1,
            ]);
            DB::table('notificaciones')->insert([
                'titulo' => 'Cerrado',
                'mensaje' => 'El día 18 de junio el gimnasio estará cerrado por motivos personales',
                'fecha_alerta' => Carbon::create('2024', '06','18')->toDateString(),
            ]);
    }
}
