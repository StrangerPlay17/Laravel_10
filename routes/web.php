<?php

use Illuminate\Http\Request;
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
    return view('contacto');
    //return "Mi proyectito :D";
});

Route::get('contacto/', function () {
    //return view('welcome');
    return view('formulario_contacto');
});

Route::post('contacto-recibe', function (Request $request) {
    dd($request->all());
});

//Route::get('welcome', function () {
    //return view('welcome');
//    return view('welcome');
//});
