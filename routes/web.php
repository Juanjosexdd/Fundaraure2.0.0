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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function(){
	//Roles
	Route::resource('config/roles', 'Config\RoleController');
	Route::delete('config/roles/{role}', 'Config\RoleController@destroy')->name('config.roles.destroy')
		->middleware('can:config.roles.destroy');
	//Departamentos
	Route::resource('config/dpto', 'Config\DepartamentoController');
	//Cargos
	Route::resource('config/cargo', 'Config\CargoController');
	//tipo clientes
	Route::resource('tcliente', 'TipoclienteController');
	//pais
	Route::resource('config/pais', 'Config\PaisController');
	//estado
	Route::resource('estado', 'EstadoController');
	//minicipio
	Route::resource('municipio', 'MunicipioController');
	//parroquia
	Route::resource('parroquia', 'ParroquiaController');
	//sector
	Route::resource('sector', 'SectorController');
	//cliente
	Route::resource('cliente', 'ClienteController');
	Route::resource('configuracion', 'ConfiguracionController');
	Route::resource('factura', 'EncabezadofacturaController');
	Route::resource('efactura', 'EstatusfacturaController');
	Route::resource('fpago', 'FormapagofacturaController');
	Route::resource('servicio', 'ServiciofacturaController');
	//Users
	Route::get('config/users', 'Config\UserController@index')->name('config.users.index')
		->middleware('can:config.users.index');
		
	Route::get('config/users/inactive', 'Config\UserController@inactive')->name('config.users.inactive')
        ->middleware('can:config.users.index');

    Route::get('config/users/trashed', 'Config\UserController@trashed')->name('config.users.trashed')
		->middleware('can:config.users.trashed');

	Route::delete('config/users/restore/{id}', 'Config\UserController@permanentDeleteSoftDeleted')->name('config.users.permanentDeleteSoftDeleted')
		->middleware('can:config.users.permanentDeleteSoftDeleted');

	Route::patch('config/users/restore/{id}', 'Config\UserController@restore')->name('config.users.restore')
		->middleware('can:config.users.restore');

	Route::put('config/users/{user}', 'Config\UserController@update')->name('config.users.update')
		->middleware('can:config.users.edit');

	Route::get('config/users/create', 'Config\UserController@create')->name('config.users.create')
		->middleware('can:config.users.create');

	Route::post('config/users/store', 'Config\UserController@store')->name('config.users.store')
		->middleware('can:config.users.create');


	Route::get('config/users/{user}', 'Config\UserController@show')->name('config.users.show')
		->middleware('can:config.users.show');

	Route::delete('config/users/{user}', 'Config\UserController@destroy')->name('config.users.destroy')
		->middleware('can:config.users.destroy');

	Route::get('config/users/{user}/edit', 'Config\UserController@edit')->name('config.users.edit')
		->middleware('can:config.users.edit');
});
// Users
Route::get('user', function(){
	return datatables()
		->eloquent(App\User::query()->orderBy('id', 'desc'))
		->addColumn('botones','config.users.partials.actions')
		->rawColumns(['botones'])
		->toJson();
});

// Users
Route::get('user1', function(){
	return datatables()
		->eloquent(App\User::onlyTrashed()->orderBy('updated_at', 'desc'))
		->addColumn('botones','config.users.partials.actionsrestore')
		->rawColumns(['botones'])
		->toJson();
});
// Roles
Route::get('role', function(){
	return datatables()
		->eloquent(Caffeinated\Shinobi\Models\Role::query()->orderBy('id', 'desc'))
		->addColumn('botones','config.roles.actions')
		->rawColumns(['botones'])
		->toJson();
});

Route::get('listadoclientes', function(){
	return datatables()
		->eloquent(App\Tipocliente::query()->orderBy('id', 'desc'))
		->addColumn('botones','tcliente.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadopais', function(){
	return datatables()
		->eloquent(App\Pais::query()->orderBy('id', 'desc'))
		->addColumn('botones','config.pais.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadoestado', function(){
	return datatables()
		->eloquent(App\Estado::query()->orderBy('id', 'desc'))
		->addColumn('botones','estado.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadomunicipio', function(){
	return datatables()
		->eloquent(App\Municipio::query()->orderBy('id', 'desc'))
		->addColumn('botones','municipio.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadoparroquia', function(){
	return datatables()
		->eloquent(App\Parroquia::query()->orderBy('id', 'desc'))
		->addColumn('botones','parroquia.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadosector', function(){
	return datatables()
		->eloquent(App\Sector::query()->orderBy('id', 'desc'))
		->addColumn('botones','sector.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadocliente', function(){
	return datatables()
		->eloquent(App\Cliente::query()->orderBy('id', 'desc'))
		->addColumn('botones','cliente.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('listadocargo1', function(){
	return datatables()
		->eloquent(App\Cargo::query()->orderBy('id', 'desc'))
		->addColumn('botones','config.cargo.actions')
		->rawColumns(['botones'])
		->toJson();
});
Route::get('departamento', function(){
	return datatables()
		->eloquent(App\Departamento::query()->orderBy('id', 'desc'))
		->addColumn('botones','config.dpto.actions')
		->rawColumns(['botones'])
		->toJson();
});
