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

/*Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes();

///////////////////////////////////////Rotas comuns
Route::get('/', 'ComumController@retornaIndex')->name('index');
Route::get('/quemsomos','ComumController@retornaQuemSomos');
Route::get('/nossotime','ComumController@retornaNossoTime');
Route::get('/','ComumController@retornaEventos');
Route::post('/contato', 'ComumController@enviaMensagemContato');








//////////////////////////////////////////////Rotas Admin
Route::get('/login', 'AdministradorController@retornaViewLogin')->name('login');
Route::post('/login', 'AdministradorController@logar');

Route::group(['middleware' => ['auth']], function(){
    
    //Route::get('/login', 'ComumController@retornaLogin')->name('login');

    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    });

    


    ///////////////////////////////////////////////Retorna telas
    Route::get('/membroAdm/view', 'AdministradorController@retornaViewMembros')->name('view.membro');
    Route::get('/eventosAdm/view', 'AdministradorController@retornaViewEventos')->name('view.evento');
    Route::get('/cadastro/membroAdm/view', 'AdministradorController@retornaViewCadastroMembro');
    Route::get('/cadastro/eventosAdm/view', 'AdministradorController@retornaViewCadastroEvento');

    //////////////////////////////////////cadastros
    Route::post('/membroAdm/cadastro', 'AdministradorController@cadastroMembro');
    Route::post('/eventoAdm/cadastro', 'AdministradorController@cadastroEvento');

    //////////////////////////////////////Atualizações
    Route::get('/altera/membroAdm/view{id}', 'AdministradorController@retornaViewAlteraMembro');
    Route::get('/altera/eventosAdm/view{id}', 'AdministradorController@retornaViewAlteraEvento');

    Route::post('/membroAdm/atualizar{id}', 'AdministradorController@atualizaMembro');
    Route::post('/eventoAdm/atualizar{id}', 'AdministradorController@atualizaEvento');

    //////////////////////////////////////Exclusões
    Route::get('/membroAdm/deletar{id}', 'AdministradorController@deletaMembro');
    Route::get('/eventoAdm/deletar{id}', 'AdministradorController@deletaEvento');


});
    
