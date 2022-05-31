<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

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


Route::get('/adminMarcas', [MarcaController::class,'index'])
->middleware(['auth'])->name('adminMarcas');





Route::get('/adminCategorias', function(){
    return view('adminCategorias');
})->middleware(['auth'])->name('adminCategorias');
Route::get('/adminCategorias', [CategoriaController::class,'index'])
->middleware(['auth'])->name('adminCategorias');



Route::get('/adminProductos', function(){
    return view('adminProductos');
})->middleware(['auth'])->name('adminProductos');



require __DIR__.'/auth.php';