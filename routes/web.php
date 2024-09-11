<?php


use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NoticiaController;
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

Route::get('/contacto/{tipo_persona?}', [ContactoController::class, 'formulario']); //Ruta que manda parametros por la URL (create)
Route::post('/contacto-recibe', [ContactoController::class, 'newContact']); // (store)
Route::get('/lista', [ContactoController::class, 'lista']); //(index)

//Genera todas las URL del CRUD completo mediante "resource" <-
Route::resource('noticias', NoticiaController::class);


//CRUD restante <- 

//borrar -> (delete/destroy)
//formularioEditar -> (edit)
//actualizar -> (update)
//mostrarDetalle -> (show)
 




//dd($request->all());
//Route::get('welcome', function () {
    //return view('welcome');
//    return view('welcome');
//});
