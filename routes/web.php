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
    Route::get('/','ApplicationController@index')->name('home');

    //multistep check
    Route::get('apply','ApplicationController@apply')->name('apply');
    Route::post('apply','ApplicationController@postApply')->name('apply.submit');
    Route::get('personal','ApplicationController@getPersonal')->name('personal');
    Route::post('personal','ApplicationController@postPersonal')->name('personal.submit');

    // Route::get('academic','AdmissionController@getAcademic')->name('academic');
    // Route::post('academic','AdmissionController@postAcademic')->name('academic.submit');
    // Route::get('choice','AdmissionController@getChoice')->name('choice');
    // Route::post('choice','AdmissionController@postChoice')->name('choice.submit');

    //edit routes
    Route::get('personal/{id}','AdmissionController@editPersonal')->name('personal.edit');
    Route::put('personal/{id}','AdmissionController@editPersonalSubmit')->name('personal.edit.submit');

    Route::get('academic/{id}','AdmissionController@editAcademic')->name('academic.edit');
    Route::put('academic/{id}','AdmissionController@editAcademicSubmit')->name('academic.edit.submit');

    Route::get('program/{id}','AdmissionController@editProgram')->name('program.edit');
    Route::put('program/{id}','AdmissionController@editProgramSubmit')->name('program.edit.submit');

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


Route::group(['prefix'=>'student','as'=>'application.','namespace'=>'Application','middleware'=>'application'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('payment', 'HomeController@payment')->name('payment');
    Route::get('information', 'HomeController@info')->name('info');
    Route::get('change-password', 'HomeController@getPassword')->name('password');
    Route::post('change-password', 'HomeController@postPassword')->name('password.submit');
    Route::post('logout', 'HomeController@logout')->name('logout');

    //admission route

    Route::get('academic','AdmissionController@getAcademic')->name('academic');
    Route::post('academic','AdmissionController@postAcademic')->name('academic.submit');
    Route::get('choice','AdmissionController@getChoice')->name('choice');
    Route::post('choice','AdmissionController@submitChoice')->name('submit.choice');
    Route::get('cv','AdmissionController@getCv')->name('cv');
    Route::get('download-cv','AdmissionController@downloadCV')->name('download.cv');




});

//payment routes
Route::get('/pay', 'PublicSslCommerzPaymentController@index')->name('pay');
Route::POST('/success', 'PublicSslCommerzPaymentController@success')->name('success');
Route::POST('/fail', 'PublicSslCommerzPaymentController@fail')->name('fail');
Route::POST('/cancel', 'PublicSslCommerzPaymentController@cancel')->name('cancel');
Route::POST('/ipn', 'PublicSslCommerzPaymentController@ipn')->name('ipn');

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
