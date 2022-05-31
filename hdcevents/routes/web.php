<?php

use Illuminate\Support\Facades\Route;

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
    $nome = "Thiago";
    $idade = 24;

    $arr = [10,20,30,40,50];
    $nomes = ["Matehus", "Maria", "João", "Saulo"];

    return view('welcome',
    [
        "nome" => $nome,
        "idade" => $idade,
        "profissao" => "programador",
        "arr" => $arr,
        "nomes" => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

