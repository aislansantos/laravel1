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

/** forma comprimida de rota simplificada */
Route::get('/', 'HomeController');
Route::view('/teste', 'teste');


Route::prefix('/tarefas')->group(function() {
    
    Route::get('/', 'TarefasController@list'); // listagem de tarefas

    Route::get('add', 'TarefasController@add'); // tela de adiçã
    Route::post('add', 'TarefasController@addAction'); // Ação de adiçao

    Route::get('edit/{id}', 'TarefasController@edit'); // tela de edição
    Route::post('edit/{id}', 'TarefasController@editAction'); // ação de edição

    Route::get('delete/{id}', 'TarefasController@del'); //ação de deletar

    Route::get('marcar/{id}', 'TarefasController@done'); // marcar resolvido ou não resolvido

});


Route::prefix('/config')->group(function () {

    Route::get('/', 'Admin\ConfigController@index');
    Route::post('/', 'Admin\ConfigController@index');

    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});

Route::fallback(function () {
    return view('404');
});


Route::get('/home', 'HomeController@index')->name('home');
