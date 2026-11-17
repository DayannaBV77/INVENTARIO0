<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Vista principal (Ejercicio 1)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Ejercicio 2: Rutas con parámetros
// 1. Ruta /saludo/{nombre}
Route::get('/saludo/{nombre}', function ($nombre) {
    return "Bienvenido, {$nombre}";
})->name('saludo');

// 2. Ruta /suma/{a}/{b} restringida a números con whereNumber
Route::get('/suma/{a}/{b}', function ($a, $b) {
    return 'La suma es: ' . ($a + $b);
})->whereNumber(['a', 'b'])->name('suma');

// 3. Ruta /acerca con Route::view
Route::view('/acerca', 'acerca')->name('acerca');

// Ejercicio 3: Controlador + vista (Estudiantes)
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

// Ejercicio 5: CRUD de solo lectura con resource (Productos)
Route::resource('productos', ProductoController::class)->only([
    'index', 'show', 'create', 'store'
]);
