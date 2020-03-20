<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
// Get List Of Categories
Route::get('admin/categories','CategorieController@index');

// Show Categorie
Route::post('admin/categorie/{id}','CategorieController@show');

// Store Categorie
Route::post('admin/categorie','CategorieController@store');

// Update Categorie
Route::put('admin/categorie/{id}','CategorieController@store');

// Delete Categorie
Route::delete('admin/categorie/{id}','CategorieController@destroy');

/////////////////////////////////////////

// Get List Of Posts

Route::get('admin/posts','ApiPostController@index');

// Show post
Route::post('admin/post/{id}','ApiPost@show');

// Store post
Route::post('admin/post','ApiPost@store');

// Update post
Route::put('admin/post/{id}','ApiPost@store');

// Delete post
Route::delete('admin/post/{id}','ApiPost@destroy');
