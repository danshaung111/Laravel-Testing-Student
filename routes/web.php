<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', 'MainController@home')->name('mainpage');

// Route::get('a', 'MainController@a')->name('apage');

// Route::get('testing', 'MainController@testing')->name('testingpage');

Route::get('/', 'MyController@home')->name('homepage');
Route::get('service', 'MyController@service')->name('servicepage');
Route::get('gallary', 'MyController@gallary')->name('gallarypage');
Route::get('blog', 'MyController@blog')->name('blogpage');
Route::get('about', 'MyController@about')->name('aboutpage');
Route::get('contact', 'MyController@contact')->name('contactpage');

Route::get('services', 'MainController@services')->name('servicepage');
Route::resource('student','StudentController');
