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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//employee leave application route

Route::group(['middleware' => 'emp'], function () {
    Route::get('/applyforleave', 'LeaveApplicationController@emp');
    Route::post('/applyforleave/send', 'LeaveApplicationController@applySend')->name('apply.send');
});
//Route::get('/applyforleave', 'LeaveApplicationController@emp')->middleware('emp');
//Route::get('/applyforleave','LeaveApplicationController@index')->name('applyforleave');

//admin route
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('department', 'DepartmentController');
    Route::resource('employee', 'EmployeeController');
    Route::get('/leave', 'LeaveAppController@index')->name('applicationToAdmin');
    Route::get('/leavereport', 'LeaveAppController@reportpdf')->name('report');
    Route::post('/leave/{id}', 'LeaveAppController@status')->name('applicationToAdmin.status');
    Route::delete('/leave/{id}', 'LeaveAppController@destroy')->name('applicationToAdmin.status.destory');
});
