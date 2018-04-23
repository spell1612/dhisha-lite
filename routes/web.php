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

//homepage route
Route::get('/', function () {
    return view('dhishome');
});

//auth routes
Auth::routes();

//public routes
Route::post('/donorlist','bdonoController@snd');
Route::post('getfeed','fbackController@getfeeb');


//admin routes
Route::group(['middleware' => ['auth']], function () {

      Route::get('/readfb','fbdispController@putfeeb');
      Route::post('/readfb/delfb/{id}','fbdispController@delfeeb');
      Route::get('/bdenter', function () {
          return view('bdenter');
      });

      Route::post('/bdenter/bdsub','bdinputController@getbdono')->name('bdsub');
      Route::get('/home', 'HomeController@index')->name('home');
});
