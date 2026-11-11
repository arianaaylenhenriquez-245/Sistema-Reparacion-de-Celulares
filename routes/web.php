<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

//pantalla bienvenida enrutamiento xd

Route::view('/', 'bienvenida')->name('bienvenida');

//pantalla login enrutamiento xd

Route::view('/login', 'login')->name('login');

//pantalla principal enrutamiento xd

Route::view('/principal', 'principal')->name('principal');

//pantalla clientes enrutamiento xd
/*get: pide la pantalla y consulta los clientes xD*/ 
/*post:envia los datos para guardar un cliente xd*/ 

Route::get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes');

Route::post('/clientes', [ClienteController::class, 'store'])
    ->name('clientes.store');

Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])
    ->name('clientes.destroy');  //identifica al cliente qeu quiero eliminar

// pantalla equipos enrutamiento xd

Route::view('/equipos', 'equipos')->name('equipos');

//pantalla reparaciones enrutamiento xdxd

Route::view('/reparaciones', 'reparaciones')->name('reparaciones');

// pantalla de los estados enrutamiento xdxd 

Route::view('/estados', 'estados')->name('estados');

//pantalla de presupuestos enrutamiento xdxd

Route::view('/presupuestos', 'presupuestos')->name('presupuestos');

//pantalla de precios enrutamiento xdxd

Route::view('/precios', 'precios')->name('precios');