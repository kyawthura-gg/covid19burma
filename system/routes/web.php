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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/help', 'HomeController@helpLink')->name('help');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/cases', 'HomeController@cases')->name('cases');
Route::get('/cluster', 'HomeController@cluster')->name('cluster');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/dashboard/blog', 'Dashboard\BlogController@index')->name('blog');
Route::post('/contactus', 'HomeController@store')->name('contactus.store');

Route::resource('dashboard/cases', 'Dashboard\CasesController');
Route::resource('dashboard/patient', 'Dashboard\PatientController');
Route::resource('dashboard/blogs', 'Dashboard\BlogController');

Route::get('reportByState', 'HomeController@reportByState')->name('reportByState');
Route::get('reportByDate', 'HomeController@reportByDate');
Route::get('casesReport', 'HomeController@casesReport');
