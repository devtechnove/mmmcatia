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



Route::resource('comentario',   'ComentarioController');

Auth::routes();

Route::middleware(['auth',])->group(function () {

#############################################################################################
##################  Administación de Datos Principales ######################################
#############################################################################################
Route::get('/', function () {
    return redirect('home');
});

/**/  Route::get('/home', 'HomeController@index')->name('home');
/**/  Route::resource('/usuario', 'UsuarioController');
/**/  Route::resource('roles',   'RolesController');
/**/  Route::get('roles/borrar/{role_id}',   'RolesController@borrar');
/**/  Route::resource('logins',   'LoginController');
/**/  Route::resource('permission',   'PermissionController');
/**/  Route::resource('academia',   'AcademiaController');
/**/  Route::resource('formasdepago',   'FormaDePagoController');
/**/  Route::resource('curso',   'CursoController');
/**/  Route::resource('nacionalidades',   'NacionalidadController');
/**/  Route::resource('tipodesangre',   'TipoDeSangreController');
/**/  Route::resource('genero',   'GeneroController');
/**/  Route::resource('paises',   'PaisController');
/**/  Route::resource('niveles',   'NivelController');
/**/  Route::resource('estadocivil',   'EstadoCivilController');
/**/  Route::resource('gradoinstruccion',   'GradoInstruccionController');
/**/  Route::resource('sociedades',   'SociedadesController');
/**/  Route::resource('iglesia',   'IglesiaController');
/**/  Route::resource('tipodeaporte',   'TipoAporteController');
/**/  Route::resource('tipodelideres',   'TipoLiderController');
/**/  Route::resource('cargo',   'CargoController');
/**/  Route::resource('estados',   'EstadosController');
/**/  Route::resource('municipios',   'MunicipiosController');
/**/  Route::resource('parroquias',   'ParroquiasController');
/**/  Route::resource('tipodemiembro',   'TipoMiembroController');
/**/  Route::resource('miembros',   'MiembroController');
      Route::get('miembros/{miembro_id}/foto',   'MiembroController@foto');
      Route::get('miembros/{miembro_id}/planilla',   'MiembroController@planilla');
      Route::post('/miembros/foto/store', 'MiembroController@fotostore')->name('foto.store');

/**/  Route::resource('hijo',   'HijoController');
/**/  Route::resource('diaservicicio',   'DiaServicioController');
/**/  Route::resource('matrimonio',   'MatrimonioController');
/**/  Route::resource('campoblanco',   'CampoBlancoController');
/**/  Route::resource('aportes',   'AporteController');
/**/  Route::resource('ofrendas',   'OfrendaController');
/**/  Route::resource('gastos',   'GastoController');

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/

/**/  Route::get('hijo',   'HijoController@index');
/**/  Route::get('hijo/{miembro_id}',   'HijoController@create');
/**/  Route::post('hijo/guardar',   'HijoController@store')->name('hijo.store');
/**/  Route::get('hijo/edit/{miembro_id}',   'HijoController@edit');

/**/  Route::get('miembros/edit/{miembro_id}',   'MiembroController@edit');
/**/  Route::get('estado/{estado_id}/municipios', 'SolicitudesController@municipios')
      ->name('estado.municipios');
/**/  Route::get('municipio/{municipio_id}/parroquias', 'SolicitudesController@parroquias')
      ->name('estado.municipios');
/**/  Route::resource('estudio',   'EstudioTeologicoController');
/**/  Route::resource('lider',   'LiderController');


/**/  Route::get('campoblanco/edit/{miembro_id}',   'CampoBlancoController@edit');
/**/  Route::get('campoblanco/detalle/{miembro_id}',   'CampoBlancoController@detalle');
/**/  Route::get('campoblanco/verdetalle/{miembro_id}',   'CampoBlancoController@verdetalle');
/**/  Route::post('campoblanco/detalle/guardar',   'CampoBlancoController@guardar')->name('detallecampoblanco.guardar');
      

#############################################################################################
#############################################################################################
#############################################################################################






});
