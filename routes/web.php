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

  //Routes to pages
Route::get('/', 'PagesController@index');
Route::get('/recommend', 'PagesController@recommend');
Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');
Route::get('/impressum', 'PagesController@impressum');
Route::get('/login', 'PagesController@login');
//Route::get('/search_results', 'PagesController@search_results');


  //Routes to serach_results resources(index, show, edit, delete, etc)
Route::resource('search_results', 'Search_resultsController');



  //Routes to necessary logic to send verification links and verify emails
Auth::routes(['verify' => true]);



  //Route to (logged-in) user home
Route::get('/home', 'HomeController@index')->name('home');



//Contact us routes
Route::get('/contact', 'ContactUSController@contactUS');
Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


// Route::get('profile', function () {
//     // Only verified users may enter...
// })->middleware('verified');
