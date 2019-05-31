<?php

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
    return view('index');
});


Route::get('NuevoTicket', function () {
    return view('NuevoTicket');
});

Route::get('Ticket_Esperando_Respuesta', function () {
    return view('Ticket_Esperando_Respuesta');
});
