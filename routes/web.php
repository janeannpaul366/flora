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
//Route::get('/', 'FrontendController@index');
Route::get('index', 'FrontendController@index');

//Route::post('/getmsg','FrontendController@savenewsletter');

//Route::post('comment/add', 'FrontendController@savenewsletter');
Route::get('savenewsletter', 'FrontendController@savenewsletter');

//Route::match(['get', 'post'], 'savenewsletterajax', 'FrontendController@savenewsletterajax');
//Route::get('savenewsletterajax', 'FrontendController@savenewsletterajax');

Route::get('ajax',function(){
    return view('message');
 });
 Route::get('setdata','AjaxController@setdata');

 
//  Route::post('/getmsg','AjaxController@index');

//Route::post('/','FrontendController@savenewsletter');

//Route::match(['get', 'post'], '/', 'FrontendController@savenewsletter');
//Route::resource('', 'FrontendController');

// Route::any('/', 'FrontendController@index');

//Route::get('/about', 'FrontendController@about');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/about', 'FrontendController@about');
// Route::get('/services', 'FrontendController@services');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('categories', 'CategoryController');

Route::resource('events', 'EventController');

Route::group(['prefix' => 'newsletter'], function () {
    Route::get('/', 'NewsletterController@index');
    Route::match(['get', 'post'], 'create', 'NewsletterController@create');
    Route::match(['get', 'put'], 'update/{id}', 'NewsletterController@update');
    Route::delete('delete/{id}', 'NewsletterController@delete');
});

