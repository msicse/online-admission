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

Route::group(['prefix'=>'admission','as'=>'admission.'], function(){
    Route::get('/','AdmissionController@index')->name('home');
    //multistep check
    Route::get('apply','AdmissionController@apply')->name('apply');
    Route::post('apply','AdmissionController@postApply')->name('apply.submit');
    Route::get('personal','AdmissionController@getPersonal')->name('personal');
    Route::post('personal','AdmissionController@postPersonal')->name('personal.submit');
    Route::get('academic','AdmissionController@getAcademic')->name('academic');
    Route::post('academic','AdmissionController@postAcademic')->name('academic.submit');
    Route::get('choice','AdmissionController@getChoice')->name('choice');
    Route::post('choice','AdmissionController@postChoice')->name('choice.submit');
    //edit routes
    Route::get('personal/{id}','AdmissionController@editPersonal')->name('personal.edit');

    Route::get('confirm','AdmissionController@getConfirm')->name('confirm');
    Route::post('confirm','AdmissionController@postConfirm')->name('confirm.submit');



    Route::post('check-email','AdmissionController@checkEmail')->name('check.mail');
    Route::get('application/verify/form','AdmissionController@verify')->name('application.verify');
    Route::post('application/verify','AdmissionController@applicationVerifySubmit')->name('application.verify.submit');
    Route::get('application/form','AdmissionController@applicationForm')->name('application.form');
    Route::post('application/form','AdmissionController@applicationSubmit')->name('application.form.submit');



    Route::get('guidelines','AdmissionController@guideline')->name('guidelines');
    Route::get('complain','AdmissionController@complain')->name('complain');

    Route::get('login','Auth\ApplicationLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\ApplicationLoginController@login')->name('login.post');
    Route::post('logout', 'Auth\ApplicationLoginController@logout')->name('logout');

});

//Application Login RouteServiceProvider


Route::group(['prefix'=>'application','as'=>'application.','namespace'=>'Application','middleware'=>'application'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('information', 'HomeController@info')->name('info');
    Route::get('change-password', 'HomeController@getPassword')->name('password');
    Route::post('change-password', 'HomeController@postPassword')->name('password.submit');
});


//Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('departments','DepartmentController');
    Route::resource('programs','ProgrameController');

    //Admission
    Route::get('applications', 'ApplicationController@index')->name('applications.index');
    Route::get('applications/{id}', 'ApplicationController@show')->name('applications.show');
    Route::get('applications/approved/{id}', 'ApplicationController@applicationApproved')->name('applications.approved');
    Route::get('admission/result', 'ApplicationController@getResult')->name('applications.result');


});

//Authors Routes
Route::group(['prefix'=>'author','as'=>'author.','namespace'=>'Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::get('test', function ()
{
    return view('test');
});
