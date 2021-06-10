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


//----------- ROTA DO EXERCÍCIO DE VARIÁVEIS NA URI E VIEW -------------

Route::prefix('home') 
    ->get('loja/{categoria}/{nome}', 'App\Http\Controllers\HomeController@index' )
    ->where('categoria', '[A-Za-z]+')
    ->where('nome', '[A-Za-z]+');

//-----------------------------------------------------------------------




Route::get('/login', 'App\Http\Controllers\LoginController@index');

// -------------- EXEMPLO COM PARAMETRO ADICIONAL---------------------
Route::get('/pizza/{sabor}/borda/{tipo}/{status?}', function ($sabor, $tipo, $status = 'publico') {  //entre chaves para definir que é uma variável
    if($status != 'privado'){
    echo $sabor;
    echo $tipo;
    echo $status;
    } else {
        echo "Pizza faltando";
    }
    
});

Route::get('/produto/{id}/{nome}', function () {
    echo "Entrou";
} )->where('id', '[0-9]+')->where('nome', '[A-Za-z]+');; // validação, digito de 0 a nove e pelo menos 1 e caractere de A a Z


Route::get('/user', 'App\Http\Controllers\UserController@index');
//          rota    ,                    quem vai ser chamado

Route::prefix('calculadora') 
    ->get('{operation}/{v1}/{v2}', 'App\Http\Controllers\Calculator\ArithmeticController@calculating' )
    ->where('v1', '[0-9]+')
     ->where('v2', '[0-9]+');

