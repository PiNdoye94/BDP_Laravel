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
    return view('accueilbanque');
});

Route::get('/', 'HomeController@home')->name('accueil');

Route::get('/clientsalarie', 'ClientSalarieController@ajoutsalarie')->name('addclientS');

Route::get('/clientparticulier', 'ClientParticulierController@ajoutparticulier')->name('addclientP');

Route::post('/clientsalarie/add', 'ClientSalarieController@addClientSalarie')->name('ajoutclientsalarie');

Route::get('/clientmoral', 'ClientMoralController@ajoutmoral')->name('addclientM');

Route::get('/gestionclients/get/{id}', 'GestionClientsController@get')->name('getgestionclients');
Route::post('/gestionclients/update/{id}', 'GestionClientsController@update')->name('updategestionclients');
Route::get('/gestionclients/delete/{id}', 'GestionClientsController@delete')->name('deletegestionclients');
Route::get('/gestionclients/getAll', 'GestionClientsController@getAll')->name('getallgestionclients');

// Route::get('/', function () {
//     return view('welcome');
// });
