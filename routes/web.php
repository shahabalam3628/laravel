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


//Request Class Form Validation Demo.
Route::get('form-validation-demo','FormValidationDemo@index');
Route::get('formData','FormValidationDemo@formData');




//Session Demo
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');




//Capcha route.
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');


Route::get('/createcaptcha', 'CaptchaController@create');
Route::post('/captcha', 'CaptchaController@captchaValidate');
Route::get('/refreshcaptcha', 'CaptchaController@refreshCaptcha');




/**Send Email Route*/
Route::get('/send/email', 'HomeController@mail');
Route::get('mail/send', 'MailController@send');




Route::get('/for-loop-demo','student_controller@forloop_demo');
Route::get('/if-else-demo','student_controller@ifelse_demo');
Route::get('/echo-data-demo','student_controller@echo_data');
Route::get('/header-footer-demo','student_controller@header_footer');















Route::get('/test','student_controller@index');
Route::get('/submit','student_controller@submit');
Route::get('/allstudent','student_controller@select_students');





Route::get('/test-insert','all_test@index');



Route::get('/test-view','Test@index');
//Route::get('/test-insert','Test@test_insert');



Route::get('/allstudents','student_controller@all_working_list');
Route::get('/student-registration','Student@index');
Route::get('/registration','Student@registration');
Route::get('/allstudents','student_controller@registration');


Route::get('/validation-first','student_controller@validation1');
Route::get('/validation-second','student_controller@validation2');
Route::get('/validation-third','student_controller@validation3');


Route::get('/pagination-demo','student_controller@pagination_demo');


/*
Route::get('/', function () {
    return view('welcome');
});
*/



/*Default Execution Route**/
Route::get('/','student_controller@all_working_list');

//Route::get('/','student_controller@select_students');
Route::get('/update_student/{number}','student_controller@update_student');
Route::get('/delete_student/{number}','student_controller@delete_student');
/*
Route::get('/', function () {
    return view('student_controller');
});
*/




Route::get('/list','employee@index');
Route::get('/list/update_employee/{integer}','employee@update_employee');
