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
    return view('/auth.login');
});

Route::get('/users', "UserController@index");
Route::get('/users/{user}', "UserController@show");

// controller de l'application
Route::resource('users','UserController');
Route::get('/joueurs/profil','JoueurController@profil');



// ROUTE SUPPLÉMENTAIRE DE PARTIE
Route::get('/parties/{partie}/inviter','PartieController@inviter');
Route::post('/parties/{partie}/inviter','PartieController@inviter');
Route::get('/parties/{partie}/inviter','PartieController@ajoutjoueur');
Route::put('/parties/{partie}/edit','PartieController@update');
Route::delete('/parties/{partie}/edit','PartieController@destroy');





//Route::post('/parties/inviter','PartieController@inviter');
Route::resource('joueurs','JoueurController');
Route::resource('parties','PartieController');

//update
Route::get('/installer', 'AppController@installer');

// création de user par inscription
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

// route partie

//Route::get('/parties/{partie}', 'JoueurController@index');
