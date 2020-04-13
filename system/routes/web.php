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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/help', 'HomeController@helpLink')->name('help');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/cluster', 'HomeController@cluster')->name('cluster');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/dashboard/blog', 'Dashboard\BlogController@index')->name('blog');
Route::post('/contactus', 'HomeController@store')->name('contactus.store');

Route::resource('dashboard/cases', 'Dashboard\CasesController');
