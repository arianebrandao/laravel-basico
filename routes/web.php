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
    return view('welcome');
});

Route::get('/empresa', function(){
	return view('empresa');
});

Route::match(['get', 'post'], '/match', function(){
	return 'Rota match';
});

Route::get('/tessste/teste/', function(){
	return 'Rota grande!';
})->name('rota.nomeada');

Route::get('/redireciona', function(){
	return redirect()->route('rota.nomeada');
});


Route::get('/categoria/{idCategoria}', function($idCategoria){
	return "Posts da categoria {$idCategoria}";
});

Route::get('/categoria/{idCategoria}/nome-fixo/{prm2}', function($idCategoria, $prm2){
	return "Posts da categoria {$idCategoria} - {$prm2}";
});

//valor opcional
Route::get('/categoria2/{idCategoria?}', function($idCategoria=null){
	return "Posts da categoria {$idCategoria}";
});

//grupo de rotas
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
	Route::get('/usuarios', function(){
		return "Usuários";
	});
	Route::get('/financeiro', function(){
		return "Financeiro";
	});
	Route::get('/', function(){
		return "Dashboard";
	});
});

Route::get('/login', function(){
	return "Formulário de login";
});