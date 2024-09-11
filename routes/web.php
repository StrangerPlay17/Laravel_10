<?php


use App\Http\Controllers\ContactoController;
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

Route::get('/', function () {
    //return view('contacto');
    return "Mi proyectito Laravel :D";
});

Route::get('/contacto/{tipo_persona?}', [ContactoController::class, 'formulario']); //Ruta que manda parametros por la URL
Route::post('/contacto-recibe', [ContactoController::class, 'newContact']);
Route::get('/lista', [ContactoController::class, 'lista']);


//dd($request->all());
//Route::get('welcome', function () {
    //return view('welcome');
//    return view('welcome');
//});
