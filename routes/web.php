<?php
use App\Http\Controllers\Dashboard\TestController;
use Illuminate\Support\Facades\Route;



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


Route::get('/', [TestController::class,'index']);

Route::get('/Bienvenida', function () {
    return view('welcome');
});

Route::get('/escribeme', function () {
    return "Contactame";
})->name('contacto');


Route::get('/custom', function() {
    $msj2 = "mensaje desde el servidor *-* ";

    $data = ['msj' => $msj2, "edad" => 17];

    return view('custom', $data);
});

Route::get('/prueba', function()
{
    return "prueba";
})->name('prueba');

