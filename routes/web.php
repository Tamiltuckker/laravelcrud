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
Route::get('/employee', 'EmployeeController@index')->name('employee.index');   
Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
Route::post('/employee', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/{id}/show', 'EmployeeController@show')->name('employee.show');
Route::get('/employee/{id}/edit', 'EmployeeController@edit')->name('employee.edit'); 
Route::post('/employee_update/{id}', 'EmployeeController@update')->name('employee.update');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy')->name('employee.destroy');
// Route::get('/form', function () {
//     return view('employee.form');
// });
    
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'EmployeeController@create')->name('home');
