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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::group(['middleware' => 'auth'], function()
{*/
    Route::get('/admin','AdminController@get_admin_main');

    Route::get('/admin/edit/place','AdminController@get_edit_place');

    Route::post('/admin/edit/place','AdminController@post_edit_place');

    Route::post('/admin/edit/category','AdminController@post_edit_category');

    Route::post('/admin/edit/contacts','AdminController@post_edit_contacts');

    Route::get('/admin/edit/contacts','AdminController@get_edit_contacts');

    Route::get('/admin/edit/card','AdminController@get_edit_food_card');

    Route::post('/admin/edit/card','AdminController@post_edit_food_card');

    Route::get('/admin/gallery','AdminController@get_gallery');

    Route::post('/admin/gallery','AdminController@get_gallery');

    /*
    Route::get('user/profile', function()
    {
        // К этому маршруту также будет привязан фильтр auth.
    });*/
/*});*/
