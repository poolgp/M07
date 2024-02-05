<?php

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
    return view('index');
});

Route::get('/cicle', function(){
    include_once('../app/Clases/Cicle.php');

    $cicles = array
    (
        new Cicle(1, 'DAW', 'Desenvolupament Aplicacions Web'),
        new Cicle(2, 'DAW', 'Desenvolupament Aplicacions Multiplataforma'),
    );
    $data['arrayCicle']=$cicles;

    return view('cicle', $data);
})->name('cicle');

Route::get('/curs', function(){
    include_once('../app/Clases/Curs.php');

    $cursos = array
    (
        new Curs(1, 'DAW1A', 'Desenvolupament Aplicacions Web de primer matí A', 'DAW'),
        new Curs(2, 'DAW2A', 'Desenvolupament Aplicacions Web de segon matí A', 'DAW'),
        new Curs(3, 'DAW2B', 'Desenvolupament Aplicacions Web de segon matí B', 'DAW')
    );
    $data['arrayCurs']=$cursos;

    return view('curs', $data);
})->name('curs');

