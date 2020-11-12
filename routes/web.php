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


Route::get('/','Dashboard\DashboardController@index');

Route::namespace('Dashboard')->prefix('dashboard')->group(function (){

    Route::resource('classes', 'ClassesController');

});

Route::namespace('Configuration')->prefix('config')->group(function (){

    Route::resource('sections', 'SectionController');

    Route::resource('niveaux', 'NiveauController');

});

