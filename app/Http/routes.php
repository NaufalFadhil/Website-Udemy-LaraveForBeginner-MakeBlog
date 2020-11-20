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
    return view('admin.index');
});

Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');


// Route::group(['middleware' => ['web']], function () {
//     Route::resource('category', 'CategoryController');
// });


// category->controller->index->category.index.blade.php;
