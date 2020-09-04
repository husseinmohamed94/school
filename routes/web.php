<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix'=>'student'],function(){
 Route::get('/','StudentController@index')->name('student.index');   
Route::get('create','StudentController@create')->name('student.create');
Route::post('store','StudentController@store')->name('studen.store');
Route::get('edit/{student_id}','StudentController@edit')->name('student.edit');
Route::post('update/{student_id}','StudentController@update')->name('studen.update');
Route::get('delete/{student_id}','StudentController@delete')->name('studen.delete');

});




