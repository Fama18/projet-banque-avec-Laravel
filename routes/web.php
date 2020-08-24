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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientmoral/add', 'ClientmoralController@add')->name('addclientmoral');
Route::get('/clientmoral/edit/{id}', 'ClientmoralController@edit')->name('editclientmoral');
Route::post('/clientmoral/update', 'ClientmoralController@update')->name('updateclientmoral');
Route::get('/clientmoral/delete/{id}', 'ClientmoralController@delete')->name('deleteclientmoral');
Route::get('/clientmoral/getAll', 'ClientmoralController@getAll')->name('getAllclientmoral');
Route::post('/clientmoral/persist', 'ClientmoralController@persist')->name('persistclientmoral');

Route::get('/clientphysique/add', 'ClientphysiqueController@add')->name('addclientphysique');
Route::get('/clientphysique/edit/{id}', 'ClientphysiqueController@edit')->name('editclientphysique');
Route::post('/clientphysique/update', 'ClientphysiqueController@update')->name('updateclientphysique');
Route::get('/clientphysique/delete/{id}', 'ClientphysiqueController@delete')->name('deleteclientphysique');
Route::get('/clientphysique/getAll', 'ClientphysiqueController@getAll')->name('getAllclientphysique');

Route::get('/compte/add', 'CompteController@add')->name('addcompte');
Route::get('/compte/edit/{id}', 'CompteController@edit')->name('editcompte');
Route::post('/compte/update', 'CompteController@update')->name('updatecompte');
Route::get('/compte/delete/{id}', 'CompteController@delete')->name('deletecompte');
Route::get('/compte/getAll', 'CompteController@getAll')->name('getAllcompte');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
