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

Route::get('/', 'HeadlineController@index');
// Route::post('generate', 'HeadlineController@generate');
// Route::get('result-headline', 'HeadlineController@result_headline');
// Route::post('headline-store', 'HeadlineController@headline_store');
Route::get('headline/create', 'HeadlineController@headline_create');

Auth::routes();

Route::get('home', 'HomeController@step_1')->name('home');
Route::get('headline/fill-in', 'HomeController@step_2');
Route::get('headline/result', 'HomeController@step_3');

Route::post('headline/fill-in/next', 'HomeController@fill_in_step_2');
Route::post('headline/fill-in/blank', 'HomeController@fill_in_step_3');

