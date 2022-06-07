<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
//Ejemplo
Route::get('/', function () {
    //return view('hola');
});
Route::get('index', function () {
    return view('index');
});
Route::post('index',[registro_usuario_beController::class, 'registro']);
//Se esta agregando el enlace de la pagina principal para que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/pagina_principal', function () {
    //Me esta retornando la vista
    return view ('interfaz/pagina_principal');
});
//Se esta agregando el enlace del apartado proyectos para que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/proyectos', function () {
    //Me esta retornando la vista
    return view ('interfaz/proyectos');
});
//Se esta agregando el enlace del apartado garantias para que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/garantial', function () {
    //Me esta retornando la vista
    return view ('interfaz/garantial');
});
//Se esta agregando el enlace del apartado ayuda para el usuario y que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/ayuda', function(){
    //Me esta retornando la vista
    return view ('interfaz/ayuda');
});
//Se esta agregando el enlace del apartado administrador que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/administrador', function (){
    //Me esta retornando la vista
    return view ('interfaz/administrador');
});
//Se esta agregando el enlace del apartado ayuda para el administrador y que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/ayudaAdministrador', function(){
    //Me esta retornando la vista
    return view ('interfaz/ayudaAdministrador');
});
//Se esta agregando el enlace del apartado empleado que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/empleado', function(){
    //Me esta retornando la vista
    return view ('interfaz/empleado');
});
//Se esta agregando el enlace del apartado ayuda para el empleado y que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/ayuda_empleado', function(){
    //Me esta retornando la vista
    return view ('interfaz/ayuda_empleado');
});
//Se esta agregando el enlace del apartado donde pueda ver el cliente los extintores y que pueda leer la vista al momento de ejecutarlo
Route::get('interfaz/buscar', function(){
    //Me esta retornando la vista
    return view ('interfaz./buscar');
});
//Se esta agregando el enlace del apartado donde el cliente puede agregar al carrito y que pueda leer la vista al momento de ejecutarlo
Route::get ('interfaz/carrito', function(){
    //Me esta retornando la vista
    return view('interfaz/carrito');
});

