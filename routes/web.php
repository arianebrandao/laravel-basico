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

//Route::get('/', 'Site\SiteController@index');

Route::group(['namespace' => 'Site'], function (){
	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');
	Route::get('/categoria/{idCategoria}', 'SiteController@categoria');
	Route::get('/categoria2/{idCategoria?}', 'SiteController@categoriaOp');
});

Route::get('/painel/produtos/teste',"Painel\ProdutoController@tests");
Route::resource('/painel/produtos', "Painel\ProdutoController");

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

Route::get('/categoria/{idCategoria}/nome-fixo/{prm2}', function($idCategoria, $prm2){
	return "Posts da categoria {$idCategoria} - {$prm2}";
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

Route::get('login', function(){
	return "Formulário de login";
});