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

Route::get('/view', function () {
    // return view('admin.index');
    // return view('store.main');
    return view('store.view');
});


Route::get('/', 'StoreController@index');

Route::controller('store', 'StoreController');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('user', 'UserController');


// Route::group(['middleware' => ['web']], function () {
//     Route::resource('category', 'CategoryController');
// });


// category->controller->index->category.index.blade.php;

Route::auth();

Route::get('/home', 'HomeController@index');
