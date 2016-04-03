<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['uses'=>'SiteController@index']);

Route::get('about',['uses'=>'SiteController@about']);

Route::get('crusades',['uses'=>'SiteController@crusades']);

Route::get('crusadesAll',['uses'=>'SiteController@crusadesAll']);

Route::get('contact',['uses'=>'SiteController@contact']);

Route::post('addTrip',['uses'=>'SiteController@store_trip']);

Route::get('addTrip',['uses'=>'SiteController@addTrip']);

Route::get('trip/{id}', ['uses'=>'SiteController@showTrip']);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
