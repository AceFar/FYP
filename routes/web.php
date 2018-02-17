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
Route::get('add_user', function() {
    return view('page/add_user');
});

Route::post('/create_user_new','UserController@store')->name('create_user');

Route::get('/upload','documentController@create');

Route::post('/upload','documentController@store');

Route::get('/show','documentController@show')->name('display');

Route::get('/','documentController@index');

Route::get('/showuser','UserController@show');

Route::get('/edit/{id}','documentController@edit')->name('updatedocpage');

Route::patch('/edit/{id}','documentController@update')->name('updatedoc');

Route::get('/delete/{id}','documentController@destroy')->name('delete');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


// Route::get('/', function () {

//     return view('welcome');

Route::resource('document', 'documentController');

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
