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

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate');


Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::resource('todo', 'TodoController');


Route::prefix('/tarefas')->group(function() {
    
    Route::get('/', 'TarefasController@list')->name('tarefas.list'); // listagem de tarefas

    Route::get('add', 'TarefasController@add')->name('tarefas.add'); // tela de adição
    Route::post('add', 'TarefasController@addAction'); // Ação de adiçao

    Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit'); // tela de edição
    Route::post('edit/{id}', 'TarefasController@editAction'); // ação de edição

    Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del'); //ação de deletar

    Route::get('marcar/{id}', 'TarefasController@done')->name('tarefas.done'); // marcar resolvido ou não resolvido

});


Route::prefix('/config')->group(function () {

    Route::get('/', 'Admin\ConfigController@index')->name('config.index');
    Route::post('/', 'Admin\ConfigController@index');

    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});

Route::fallback(function () {
    return view('404');
});


Route::get('/home', 'HomeController@index')->name('home');
