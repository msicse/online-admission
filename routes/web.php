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

//Frontend Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('admission-', 'HomeController@login')->name('login');

//Auth Routes
Auth::routes();
//Admission Routes
Route::get('admission','AdmissionController@index')->name('admission.home');
Route::group(['prefix'=>'admission','as'=>'admission.'], function(){
    Route::get('verify','AdmissionController@verify')->name('verify');
    Route::get('apply','AdmissionController@apply')->name('apply');
    Route::get('login','AdmissionController@login')->name('login');
    Route::get('guidelines','AdmissionController@guideline')->name('guidelines');
    Route::get('complain','AdmissionController@complain')->name('complain');
});
//Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

//Authors Routes
Route::group(['prefix'=>'author','as'=>'author.','namespace'=>'Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
