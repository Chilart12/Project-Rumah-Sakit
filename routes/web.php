<?php

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

// Route::get('/', function () {
//     return view('index.html');
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/stats', function () {
//     return view('pages.statistics');
// });

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/patients/index', 'PatientController@index')->name('pages.patients.index')->middleware('auth');
Route::get('/patients/create', 'PatientController@create')->name('pages.patients.create')->middleware('auth');
Route::post('/patients/create', 'PatientController@store')->name('pages.patients.store')->middleware('auth');
Route::get('/patients/{patient}', 'PatientController@show')->name('pages.patients.show')->middleware('auth');
Route::get('/patients/{patient}/edit', 'PatientController@edit')->name('pages.patients.edit')->middleware('auth');
Route::patch('/patients/{patient}/edit', 'PatientController@update')->name('pages.patients.update')->middleware('auth');
Route::delete('/patients/{patient}/delete', 'PatientController@destroy')->name('pages.patients.destroy')->middleware('auth');
