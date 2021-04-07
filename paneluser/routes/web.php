<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ImprimirController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\AdministratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('cliente/create', function () {
    return view('cliente.create');
});

Route::get('/imprimir', [ImprimirController::class, 'imprimir'])->name('imprimir');

Route::get('/carrito', [ShowController::class, 'index'])->name('index');
Route::post('/cart-add',     [CartController::class, 'add'])->name('cart.add');

Route::get('/cart-checkout', [CartController::class, 'cart'])->name('cart.checkout');

Route::post('/cart-clear',   [CartController::class, 'clear'])->name('cart.clear');

Route::post('/cart-removeitem',   [CartController::class, 'removeitem'])->name('cart.removeitem');

Route::resource('/cart', CartController::class);

Route::get('items', [ProductController::class, 'items'])->name('items');

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/contactanos', [ProductController::class, 'contactos']);
Route::post('/contactanos', [ProductController::class, 'store'])->name('product.store');

Route::get('/solicitacion', [ProductController::class, 'soli']);
Route::post('/solicitacion', [ProductController::class, 'agre'])->name('product.agre');





Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');

//gracias al middleware no podemos entrar a direcciones que solo el adminstrador puede entrar



Auth::routes();

//ADMINISTRADORES
Route::get('admins/login', [AdministratorController::class, 'showLoginForm']);
Route::post('admins/login', [AdministratorController::class, 'login']);
Route::get('admins/area', [AdministratorController::class, 'secret']);
// Route::group(['middleware' => 'adm'], function () {
//     Route::get('/home', [AdministratorController::class, 'authenticated'])->name('home');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('/', [EmpleadoController::class, 'index'])->name('home');




Route::get('/home', function () {
    return view('home');
})->name('home')->middleware(['adm', 'auth:admins']);


//todo del ever
// Route::get('/productos', [App\Http\Controllers\HomeController::class, 'index'])->name('productos')->middleware(['adm', 'auth:admins']);
// Route::post('/post', [HomeController::class, 'post'])->name('post')->middleware(['adm', 'auth:admins']);
// Route::get('/productos', [HomeController::class, 'index'])->name('productos')->middleware(['adm', 'auth:admins']);
Route::resource('empleado', EmpleadoController::class)->middleware(['adm', 'auth:admins']);

Route::get('paneles', [PanelController::class, 'index'])->name('paneles.index')->middleware(['adm', 'auth:admins']);
Route::get('paneles/create', [PanelController::class, 'create'])->name('paneles.create')->middleware(['adm', 'auth:admins']);
Route::post('paneles', [PanelController::class, 'store'])->name('paneles.store')->middleware(['adm', 'auth:admins']);
Route::get('paneles/{dato}', [PanelController::class, 'show'])->name('paneles.show')->middleware(['adm', 'auth:admins']);
Route::get('paneles/{dato}/edit', [PanelController::class, 'edit'])->name('paneles.edit')->middleware(['adm', 'auth:admins']);
Route::put('paneles/{dato}', [PanelController::class, 'update'])->name('paneles.update')->middleware(['adm', 'auth:admins']);
Route::delete('paneles/{dato}', [PanelController::class, 'destroy'])->name('paneles.destroy')->middleware(['adm', 'auth:admins']);

Route::get('/users', [HomeController::class, 'users'])->name('users')->middleware(['adm', 'auth:admins']);
Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index')->middleware(['adm', 'auth:admins']);
Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create')->middleware(['adm', 'auth:admins']);
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store')->middleware(['adm', 'auth:admins']);
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show')->middleware(['adm', 'auth:admins']);
Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware(['adm', 'auth:admins']);
Route::put('usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update')->middleware(['adm', 'auth:admins']);
Route::delete('usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware(['adm', 'auth:admins']);


Route::get('/solicitudes', [HomeController::class, 'solicitudes'])->name('solicitudes')->middleware(['adm', 'auth:admins']);
Route::get('formularios', [FormularioController::class, 'index'])->name('formularios.index')->middleware(['adm', 'auth:admins']);
Route::get('formularios/create', [FormularioController::class, 'create'])->name('formularios.create')->middleware(['adm', 'auth:admins']);
Route::post('formularios', [FormularioController::class, 'store'])->name('formularios.store')->middleware(['adm', 'auth:admins']);
Route::get('formularios/{formulario}', [FormularioController::class, 'show'])->name('formularios.show')->middleware(['adm', 'auth:admins']);
Route::get('formularios/{formulario}/edit', [FormularioController::class, 'edit'])->name('formularios.edit')->middleware(['adm', 'auth:admins']);
Route::put('formularios/{formulario}', [FormularioController::class, 'update'])->name('formularios.update')->middleware(['adm', 'auth:admins']);
Route::delete('formularios/{formulario}', [FormularioController::class, 'destroy'])->name('formularios.destroy')->middleware(['adm', 'auth:admins']);
