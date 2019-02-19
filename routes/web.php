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

Route::group(['middleware'=>['auth']], function(){
    Route::get('change-password', 'SettingController@index')->name('setting.change.pass');
    Route::post('update-password', 'SettingController@updatePass')->name('setting.update.pass');
});
//Admission Routes
Route::get('admission','AdmissionController@index')->name('admission.home');
Route::group(['prefix'=>'admission','as'=>'admission.'], function(){
    Route::get('application/verify','AdmissionController@applicationVerify')->name('application.verify');
    Route::post('application/verify','AdmissionController@applicationVerifySubmit')->name('application.verify.submit');
    Route::get('application/form','AdmissionController@applicationForm')->name('application.form');
    Route::post('application/form','AdmissionController@applicationSubmit')->name('application.form.submit');
    Route::get('login','AdmissionController@login')->name('login');
    Route::get('guidelines','AdmissionController@guideline')->name('guidelines');
    Route::get('complain','AdmissionController@complain')->name('complain');
});
//Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('departments','DepartmentController');
    Route::resource('programs','ProgrameController');
});

//Authors Routes
Route::group(['prefix'=>'author','as'=>'author.','namespace'=>'Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::get('test', function ()
{
    return view('test');
});
