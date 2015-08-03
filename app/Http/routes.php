<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to    
| and give it the controller to call when that URI is requested.   
|
*/

Route::get('/', function () {
    return view('home');
});

//The following routes handle direction from the navbar's 'Reports' dropdown
Route::get('space', 'PagesController@space'); 
Route::get('financial', 'PagesController@financial'); 
Route::get('occupancy', 'PagesController@occupancy'); 
Route::get('floorplans', 'PagesController@floorplans'); 

Route::post('space', 'GraphController@space');