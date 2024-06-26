<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\InventarioEquipoController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductoServicioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CompraProductoController;
use App\Http\Controllers\DetalleProductoController;
use App\Models\DetalleMembresia;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('can:admin.dash')->group(function(){
    Route::get('/admin',[HomeController::class,'dash'])->name('admin.dash');

    Route::resource('categorias', CategoriaController::class);
    Route::resource('inventarios', InventarioController::class);
    Route::resource('membresias', MembresiaController::class);
    Route::resource('tipos', TipoController::class);
    Route::resource('pro_ser', ProductoServicioController::class);
    Route::resource('ventas', VentaController::class);
    Route::resource('detaVentas', DetalleVentaController::class);
    Route::resource('sucursales', SucursalController::class);
    Route::resource('horarios', HorarioController::class);
    Route::resource('roles', RolController::class);
    Route::resource('detalleMem', DetalleMembresia::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('comentarios', ComentarioController::class);
    Route::resource('notificaciones', NotificacionController::class);
    Route::resource('equipos', EquipoController::class);
    Route::resource('inventarioEqui', InventarioEquipoController::class);
    Route::resource('proveedor', ProveedorController::class);
    Route::resource('compra_pro', CompraProductoController::class);
    Route::resource('detalle_pro', DetalleProductoController::class);
    Route::post('/generar_pdf', [PdfController::class, 'generar_pdf'])->name('generar_pdf');
    Route::get('/formulario', [PdfController::class, 'vista_generar'])->name('vista_generar');
});
