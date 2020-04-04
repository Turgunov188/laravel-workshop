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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::name('index')->get('/', 'ShopController@index');
Route::name('women')->get('/women', 'WomenController@women');
Route::name('men')->get('/men', 'MenController@men');
Route::name('about')->get('/about', 'AboutController@about');
Route::name('login')->get('/login', 'LoginController@login');
Route::name('registration')->get('/registration', 'RegistrationController@registration');
Route::name('cart')->get('/cart', 'CartController@cart');
Route::name('single')->get('/single/{id}', 'SingleController@single');
Route::name('tocart')->post('/tocart', 'CartController@tocart');
Route::name('clearall')->post('/clearall', 'CartController@clearall');
Route::name('clearone')->post('/clearone', 'CartController@clearone');
Route::name('mailer')->post('/mailer', 'ShopController@mailer');