<?php

use Illuminate\Support\Facades\Route;

//pantalla bienvenida enrutamiento xd

Route::view('/', 'bienvenida')->name('bienvenida');

//pantalla login enrutamiento xd

Route::view('/login', 'login')->name('login');

//pantalla principal enrutamiento xd

Route::view('/principal', 'principal')->name('principal');

//pantalla clientes enrutamiento xd

Route::view('/clientes', 'clientes')->name('clientes');

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