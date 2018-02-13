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


// Admin Auth Routes

Route::get('admin-login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Admin\LoginController@login');
Route::post('admin-logout','Admin\LoginController@logout')->name('admin-logout');
Route::get('admin-logout', 'Admin\LoginController@logout');



// Admin Home Page
Route::get('index','AdminController@index')->name('admin.index');

// Employee Routes
Route::get('employees','EmployeeController@index')->name('employee.index');
Route::post('/employee-create','EmployeeController@store')->name('employees.store');
Route::get('/employee/{id}','EmployeeController@edit')->name('employee.edit');
Route::patch('/employee/{id}','EmployeeController@update')->name('employee.update');
Route::delete('/employee/{id}','EmployeeController@destroy')->name('employee.destroy');

Route::get('employeee/{id}','EmployeeController@employee')->name('employee.show');

Route::get('attendance','AttendanceController@index')->name('attendance');
Route::post('attendance','AttendanceController@store')->name('att.store');
Route::delete('/attendance/{id}','AttendanceController@destroy')->name('attendance.destroy');


Route::get('attendance-report/{id}','EmployeeController@report');