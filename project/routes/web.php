<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZombieController;
use App\Http\Controllers\ZombieDinamic;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sopas', function () {
    return ('nocnocnoc');
});

Route::get('/', function () {
    return view('zombielogia');
});

Route::get('/zombicomun', function () {
    return view('zombie1');
});

Route::get('/zombicaracono', function () {
    return view('zombie2');
});

Route::get('/zombicaraladrillo', function () {
    return view('zombie3');
});

Route::get('/zombidito', function () {
    return view('zombie4');
});

Route::get('/zombiecontrolador', [ZombieController::class, 'index']); //controlador estático

Route::get('/zombiedinamico', [ZombieDinamic::class, 'index']); //controlador dinámico

Route::get('/plantillas', function () {
    return view('plantillas');
});

Route::get('/plantillas2', function () {
    return view('plantillas2');
});

Route::get('/insertarvalor', function () {
    
    //$computer = Computer::all();
    //return $computer;

    $computer = new Computer;
    $computer->model='Es una computadora demostrativa';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=14;
    $computer->save();
    
    //return $computer;
    //SE ACCEDE AL VALOR DE published_at

    $computer = Computer::find(1);
    //return $computer->published_at;
    
    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    //return $computer->published_at->format('d-m-Y');

    //EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
    return $computer->published_at->diffForHumans();

    //AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
    //DE SER VALORES TIMESTAMP

});
    