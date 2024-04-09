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
    return view('welcome');
});

Route::get('/', function () {

    $name='Rodrigo';
    $LName='Garro';
    return view('welcome', ['name'=>$name, 'LName'=>$LName]);    
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    $resultado = $num1 + $num2;
    echo 'Resultado ' . $resultado;
});

Route::get('/nomes/{name}/{lastname?}', function ($x, $y=null){
    if ($y == null){
        echo 'Olá', $x;
    }else {
        echo 'Olá ', $x , $y;
    }
});


