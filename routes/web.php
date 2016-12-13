<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//       // return view('/home');
//    return view((Auth::check()) ? '/home' : 'auth.login');
//});
Route::get('/','HomeController@index')->middleware('banned');;

Auth::routes();

Route::any('/home', 'HomeController@index')->middleware('banned');;

Route::get('/users','UserController@index');

Route::get('/users/{id}','UserController@edit')->name('userEdit');

Route::delete('/user/delete/{user}','UserController@delete')->name('userDelete');

Route::post('/user/update/{id}','UserController@update')->name('userUpdate');

//Route::get('/ban',function (){
//    return view('/ban');
//});


Route::get('/articles','ArticleController@index');
Route::get('/createArticle','ArticleController@create');
Route::get('/editArticle/{id}','ArticleController@edit')->middleware('admin')->name('editArticle');
Route::post('/updateArticle/{id}','ArticleController@update')->middleware('admin');
Route::get('/deleteArticle/{id}','ArticleController@delete')->middleware('admin')->name('deleteArticle');
Route::post('/storeArticle','ArticleController@store');
Route::get('/showArticle/{id}','ArticleController@show');