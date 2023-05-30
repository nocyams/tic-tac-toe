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
    return view('welcome');
});

Route::get('teste', function (){
    return 'teste';
});

Route::post('/prova', function (Request $r){
    $nome = $r->nome;
    $nota = $r->nota;

    return response()->json(['resposta' => 'ok']);
});
