<?php
use App\Categorie;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

///////////////////////// Public >>>> Routes //////////////////////////
Route::get('/', function () {
    return view('index');
});
/// Conatct
Route::get('/contact', 'SendEmailController@index');

Route::post('contact/sendemail','SendEmailController@sendemail');
///////
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/services', function () {
    return view('services');
});
////////////////////////////////////////////////////////////////////
//////////// Administration >>>>> Routes
Route::get('admin',function(){
    return view('admin/dashboard');
});
////->middleware('auth')

Route::resource('admin/post','PostController');
Route::put('admin/post/updatestatu/{id}',"PostController@updatestatu");
Route::resource('admin/categorie','CategorieController');

////////////////////////////////////////////////////////////////////



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
