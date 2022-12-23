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
/*
Route::get('/', function () {
    return view('welcome');
    //return view('liste_users');
});
Route::post('/createUser',[
	'uses' => 'ParentController@home',
	'as' => 'createUser',

]);
*/

//*
/*page d'acceuil*/
Route::get('/','ParentController@seConnecter')->name('login.users');


Route::post('login','ParentController@authenticate')->name('login');
Route::post('logout','ParentController@logout')->name('logout');
 

Route::get('register','ParentController@register')->name('register.users');
/*page insertion*/
Route::get('/liste','ParentController@home')->name('liste.users');
Route::get('/profil/{id}','ParentController@profil')->name('profil.users');
/*page insertion*/
Route::get('/inserer','ParentController@add_users');
/*Add Edituant*/
Route::get('/add_Etutiant','ParentController@add_etudiants'); 
//Route::get('/','ParentController@add_users');
Route::post('/insert','ParentController@insert')->name('add.users');; 
/*afficher page modification*/

Route::get('/update/{id}','ParentController@update');
/*fait la modification*/

Route::get('Afficheprofil/{lastname}','ParentController@getUrlUser');

Route::get('/edit/{id}','ParentController@edit');
/*fait la suppression*/
Route::get('/delete/{id}','ParentController@destroy');
Route::get('/deleteAll','ParentController@deleteAll')->name('deleteAll.users');
/**/
Route::get('/find', 'ParentController@findUsers');
/**/
Route::get('/result','ParentController@seachUser');
/**/
Route::get('/search','ParentController@search')->name('search.users');

//Route::get('stripe', 'StripePaymentController@stripe');
/*Route::get('/', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');*/
