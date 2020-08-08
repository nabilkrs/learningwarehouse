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

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/showcours', 'EnseignantController@show')->name('showcours');
Route::get('/addcours', 'EnseignantController@create')->name('addcours');
Route::put('/addcours', 'EnseignantController@addcours')->name('storecours');
Route::get('/showstudentcours', 'EnseignantController@showstudentcour')->name('showstcours');
Route::get('/editcourse/{id}', 'EnseignantController@edit')->name('edit');
Route::put('/editcourse/{id}', 'EnseignantController@update')->name('update');
Route::get('/delete/{id}', 'EnseignantController@destroy')->name('delete');
Route::get('/showonecours/{id}', 'EnseignantController@index')->name('showonecours');
Route::get('/profil/edit', 'EnseignantController@editprofil')->name('editprofil');
Route::put('/profil/edit', 'EnseignantController@updateprofil')->name('updateprofil');
Route::get('/addpdfcours','EnseignantController@showpdfpage')->name('showpagepdf');
Route::put('/addpdfcours','EnseignantController@addpdfcour')->name('addpdfcours');
Route::get('/showpdfcours', 'EnseignantController@showpdfcours')->name('showpdfcours');
Route::get('/showmypdfcours', 'EnseignantController@showmypdfcours')->name('showmypdfcours');