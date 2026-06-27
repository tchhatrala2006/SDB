<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Middleware\pagecheacker;
Route::get('/', function () {
    return view('welcome');
});

// index(home)
Route::get('/index', function () {
    return view('index');
})->name('index');

// forgot
Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[logincontroller::class,'login'])->name('login.check');

Route::view('/adminsing','adminsing');
Route::post('/ad',[logincontroller::class,'adminsing']);

Route::view('/singup','singup');
Route::post('/s',[logincontroller::class,('singup')]);

Route::view('/admin','admin');
Route::post('/a',[logincontroller::class,('adminlogin')]);

Route::view('/adminForget','adminForget');
Route::post('/afrg',[logincontroller::class,('adminfrg')]);

//admin

Route::get('layout',function(){
    return View('admindashbord');
});


// -----------------------------------------view-------------------------------------------------------

// view login
Route::view('/viewlogin','viewlogin');
Route::get('viewlogin',[logincontroller::class,('displaylogin')]);

// view admin login
Route::view('/viewadmin','viewadmin');
Route::get('viewadmin',[logincontroller::class,('displayadmin')]);

// view singup
Route::view('/viewsing',' viewsing');
Route::get('viewsing',[logincontroller::class,('displaysing')]);



Route::view('/viewadminsing','viewadminsing');
Route::get('viewadminsing',[logincontroller::class,('viewadminsing')]);


// ---------------------------------------notice----------------------------------------------------

// view Notice
Route::view('/viewNotice','viewNotice')->middleware(pagecheacker::class);



Route::get('/academic-details', function () {
    return view('academic-details');
});



// Sport Registration Form
Route::get('/sport-register', function () {
    return view('sport-register');
});

// Store Data
Route::post('/sp', [LoginController::class, 'sport']);

// Show Data
Route::get('/sportrgs', [LoginController::class, 'sportshow']);

// add event
Route::get('/addevent', function () {
    return view('addevent');
});

Route::post('/addevent', [LoginController::class, 'addevent']);

Route::get('/event-details', [LoginController::class, 'eventdetails']);

//  exam

Route::get('examadd', function () {
    return view('examadd');
});
Route::post('/exam.store', [LoginController::class, 'addexam']);

Route::view('/examdt','examdt');
Route::get('/examdt', [LoginController::class, 'examshow']);


// view notice 
Route::view('/Notice','Notice');
      

// deleteNotice Route
Route::view('/DN','deleteNotice');

// deleteExam
Route::view('/DE','deleteExam');
Route::post('/delete',[logincontroller::class,'deleteexam']);

// delete event
Route::view('/DEvenet','deleteEvent');
Route::post('/devent',[logincontroller::class,'deleteevent']);

// update exam
Route::view('/UExam','UpdateExam');
Route::post('/Update',[logincontroller::class,'updateExam']);

//  update event
Route::view('/UEvent','UpdateEvent');
Route::post('/UpdateEvent',[logincontroller::class,'updateEvent']);


// ---------------------------------------Search Name----------------------------------------------------
Route::post('/searchuser',[logincontroller::class,'searchuser']);
Route::post('/searchadmin',[logincontroller::class,'searchadmin']);
Route::post('/searchsport',[logincontroller::class,'searchsport']);