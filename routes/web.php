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
Route::get('admin/login', 'HomeController@login')->name('admin.login');


Route::get('about-us/message', 'FrontendController@message')->name('message');
Route::get('contact','FrontendController@contact')->name('contact');
Route::post('contact','FrontendController@postContact')->name('submit.contact');
Route::get('about-us/certification','FrontendController@certification')->name('certification');
Route::get('about-us/mission','FrontendController@mission')->name('mission');
Route::get('academics/rules','FrontendController@rules')->name('rules');
Route::get('academics/degrees','FrontendController@degrees')->name('degrees');
Route::get('academics/credit','FrontendController@credit')->name('credit');
Route::get('academics/guideline','FrontendController@guideline')->name('guideline');
Route::get('admission-info/tuition','FrontendController@tuition')->name('tuition');
Route::get('admission-info/registration','FrontendController@registration')->name('registration');
Route::get('admission-info/office','FrontendController@office')->name('office');
Route::get('faculties/business','FrontendController@business')->name('business');
Route::get('faculties/arts','FrontendController@arts')->name('arts');
Route::get('faculties/engineering','FrontendController@engineering')->name('engineering');

//Auth Routes
Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    Route::get('change-password', 'SettingController@index')->name('setting.change.pass');
    Route::post('update-password', 'SettingController@updatePass')->name('setting.update.pass');
});


//Admission Routes

Route::group(['prefix'=>'admission','as'=>'admission.'], function(){

    Route::get('/','ApplicationController@index')->name('home');
    Route::get('guidelines','AdmissionController@guideline')->name('guidelines');
    Route::get('how-to-apply','AdmissionController@how')->name('how');
    Route::get('support','AdmissionController@complain')->name('complain');

    Route::get('register','AdmissionController@register')->name('register');
    Route::post('register','AdmissionController@postRegister')->name('register.submit');

// Student login route
    Route::get('login','Auth\ApplicationLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\ApplicationLoginController@login')->name('login.post');
    Route::post('logout', 'Auth\ApplicationLoginController@logout')->name('logout');

});

//Application Login RouteServiceProvider


Route::group(['prefix'=>'student','as'=>'application.','namespace'=>'Application','middleware'=>'application'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    //Route::get('payment', 'HomeController@payment')->name('payment');
    Route::get('information', 'HomeController@info')->name('info');

    //Profiles Routes
    Route::get('add-personal', 'ProfileController@addPersonal')->name('add.personal');
    Route::post('add-personal', 'ProfileController@postAddPersonal')->name('add.personal.submit');
    Route::get('add-academic', 'ProfileController@addAcademic')->name('add.academic');
    Route::post('add-academic', 'ProfileController@postAddAcademic')->name('add.academic.submit');



    Route::get('change-password', 'HomeController@getPassword')->name('password');
    Route::post('change-password', 'HomeController@postPassword')->name('password.submit');
    Route::post('logout', 'HomeController@logout')->name('logout');


    //admission route
    Route::get('info/academics','AdmissionController@getAcademicAll')->name('academics');
    Route::get('info/personal','AdmissionController@getPersonal')->name('personal');
    Route::get('info/programs','AdmissionController@getProgram')->name('programs');
    Route::get('info/cv','AdmissionController@getCv')->name('cv');
    Route::get('info/download-cv','AdmissionController@downloadCV')->name('download.cv');

    Route::get('payment','AdmissionController@getPayment')->name('payment');



    Route::get('academic','AdmissionController@getAcademic')->name('academic');
    Route::post('academic','AdmissionController@postAcademic')->name('academic.submit');
    Route::get('choice','AdmissionController@getChoice')->name('choice');
    Route::post('choice','AdmissionController@submitChoice')->name('submit.choice');

    //Application Routes
    Route::get('apply','AdmissionController@getApplication')->name('apply');
    Route::post('apply','AdmissionController@postApplication')->name('apply.submit');
    Route::get('program-select','AdmissionController@getProgramSelect')->name('program.select');
    Route::post('program-select','AdmissionController@programSelect')->name('program.submit');
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
    Route::resource('faculties','DepartmentController');
    Route::resource('programs','ProgrameController');
    Route::resource('dates','ApplicationDateController');

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
