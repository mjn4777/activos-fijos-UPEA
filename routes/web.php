<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GrupoController;
use App\Http\Controllers\admin\ActivoController;
use App\Http\Controllers\admin\EstadoController;
use App\Http\Controllers\admin\OficinaController;
use App\Http\Controllers\admin\ResponsableController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('admin/grupo', 'admin\GrupoController');
Route::resource('admin/grupo', GrupoController::class);
//Route::resource('admin/activo', 'admin\ActivoController');
Route::resource('admin/activo', ActivoController::class);
//Route::resource('admin/estado', 'admin\EstadoController');
Route::resource('admin/estado', EstadoController::class);
//Route::resource('admin/oficina', 'admin\OficinaController');
Route::resource('admin/oficina', OficinaController::class);
//Route::resource('admin/responsable', 'admin\ResponsableController');
Route::resource('admin/responsable', ResponsableController::class);
Route::get('admin/mostrarpdf', [ActivoController::class,'MostrarActivoPdf']);