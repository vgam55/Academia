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
    return view('auth.login');
});

Route::post('logout',function(){
	Auth::logout();
});

Auth::routes();

//Rutas para listar TODOS los elementos de la tabla. Van por orden alfabetico.
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/alumnos','AlumnosController@listarAlumnos');
Route::get('/clases','ClasesController@listarClases');
Route::get('/cursos','CursosController@listarCursos');
Route::get('/grupos','GruposController@listarGrupos');
Route::get('/horas','HorasController@listarHoras');
Route::get('/horarios', 'HorariosController@listarHorarios');
Route::get('/Permisos','PermisosController@listarPermisos');
Route::get('/profesores','ProfesoresController@listarProfesores');
Route::get('/roles','RolesController@listarRoles');
Route::get('/temas', 'TemasController@listarTemas');
Route::get('/temarios','TemariosController@listarTemarios');
Route::get('/usuarios','UsersController@listarUsuarios');

//Rutas para añadir nuevos registros
Route::post('/aniadirAlumnos','AlumnosController@aniadirAlumno');
Route::post('/aniadirClases','ClasesController@aniadirClase');
Route::post('/aniadirCursos','CursosController@aniadirCurso');
Route::post('/aniadirGrupos','GruposController@aniadirGrupos');
Route::post('/aniadirHorarios','HorariosController@aniadirHorario');
Route::post('/aniadirHoras','HorasController@aniadirHoras');
Route::post('/aniadirProfesores','ProfesoresController@aniadirProfesores');
Route::post('/aniadirTemarios','TemariosController@aniadirTemario');
Route::post('/aniadirTemas','TemasController@aniadirTema');

//Rutas para borrar registros ya existentes

Route::delete('/borrarAlumnos/{id}','AlumnosController@borrarAlumno');
Route::delete('/borrarClases/{id}','ClasesController@borrarClase');
Route::delete('/borrarCursos/{id}','CursosController@borrarCurso');
Route::delete('/borrarGrupos/{id}','GruposController@borrarGrupo');
Route::delete('/borrarHorarios/{id}','HorariosController@borrarHorario');
Route::delete('/borrarHoras/{id}','HorasController@borrarHora');
Route::delete('/borrarProfesores/{id}','ProfesoresController@borrar');
Route::delete('/borrarTemarios/{id}','TemariosController@borrarTemario');
Route::delete('/borrarTemas/{id}','TemasController@borrarTema');