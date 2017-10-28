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

Route::bind('user',function($id){
  return App\User::where('id',$id)->first();
});

Route::bind('mensaje',function($idMensaje){
  return App\Mensaje::where('idMensaje',$idMensaje)->first();
});

Route::resource('admin/categoria','AdminMensajeController');
Route::resource('admin/usuario', 'AdminUserController');
Route::resource('admin/mapa', 'AdminMapaController');
Route::resource('home/mapa', 'MapaController');



Route::post('/enviar','ContactoController@enviarContacto');

Route::post('/enviarforo','MensajeController@store');




Route::get('foro', [
    'uses' => 'MensajeController@store'
  ]);

Route::get('foro','ForoController@index');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get("contact", function(){
   return View::make('home/contact');
});
Route::get('home', function () {
    return view('welcome');
});
Route::get('about', function () {
        return View::make('home/about');
});

Route::get('galeria', function () {
        return View::make('home/galeria');
});

Route::get('perfil', function () {
        return View::make('home/perfil');
});



Route::get('acoso', function () {
        return View::make('home/acoso');
});



Route::get('foro', function () {
        return View::make('home/foro');
});

Route::get('foro','MensajeController@index');



Route::get('mapa', function () {
        return View::make('home/mapa');
});

Route::get('mapa','MapaController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('enviar.php', function () {
    return view('enviar');
});

Route::get('/registro', function () {
    return view('auth/registro');
});

route::get('admin/home', function(){
  return view('admin/home');

});


Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{

	Route::get('home', function(){
		return view('admin.home');
	});






});


Auth::routes();








Route::get('logout',[
  'as'=> 'logout',
  'uses'=>'Auth\LoginController@logout'
]);
