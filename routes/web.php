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

Auth::routes();

Route::get('/', 'HeadlineController@index');
Route::post('headline-store', 'HeadlineController@headline_store');
Route::get('headline/create', 'HeadlineController@headline_create');

Route::get('home', 'HomeController@index')->name('home');
Route::get('headline/step-2', 'HeadlineController@step_2');
Route::get('headline/result', 'HeadlineController@step_3');

Route::post('headline/fill-in/next', 'HeadlineController@fill_in_step_2');
Route::post('headline/fill-in/blank', 'HeadlineController@fill_in_step_3');

