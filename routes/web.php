<?php

use Illuminate\Support\Facades\Route;
use App\JobPost;
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

Route::get('/', function () {
    $post = JobPost::all();
        return view('home',compact("post"));
});

Route::get('/dashboard', function () {
        return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/setting', 'HomeController@setting')->name('setting');
Route::post('/home/change', 'HomeController@change')->name('change');
Route::get('/home/approve', 'HomeController@viewpost')->name('approve');
Route::get('/home/{id}', 'HomeController@approvepost')->name('approvepost');

Route::get('/home/post','PostController@create')->name('post');
Route::post('/home/post','PostController@store')->name('post');
Route::get('/home/mypost', 'PostController@index')->name('mypost');
Route::get('/home/{id}/edit','PostController@edit')->name('editpost');
Route::put('/home/{id}','PostController@update')->name('updatepost');
Route::delete('/home/{id}/delete','PostController@destroy')->name('deletepost');

