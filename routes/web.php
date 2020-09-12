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
Route::post('/login/custom','LoginToController@login')->name('login.custom');   


Auth::routes();
/*
Route::group(['prefix'=>'student'],function(){
 Route::get('/','StudentController@index')->name('student.index');   
Route::get('create','StudentController@create')->name('student.create');
Route::post('store','StudentController@store')->name('studen.store');
Route::get('edit/{student_id}','StudentController@edit')->name('student.edit');
Route::post('update/{student_id}','StudentController@update')->name('studen.update');
Route::get('delete/{student_id}','StudentController@delete')->name('studen.delete');

});*/



Route::group(['middleware'=>'auth'],function(){

    Route::group(['middleware'=>'admin'],function(){


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

        Route::get('dashboard','DashboardController@index')->name('dashboard'); 

        Route::group(['prefix'=>'student'],function(){
            Route::get('/','StudentController@index')->name('student.index');   
           Route::get('create','StudentController@create')->name('student.create');
           Route::post('store','StudentController@store')->name('studen.store');
           Route::get('edit/{student_id}','StudentController@edit')->name('student.edit');
           Route::post('update/{student_id}','StudentController@update')->name('studen.update');
           Route::get('delete/{student_id}','StudentController@delete')->name('studen.delete');
    });


    Route::group(['prefix'=>'Rows'],function(){
        Route::get('/','RowsController@index')->name('Rows.index');   
        Route::get('show/{row_id}','RowsController@show')->name('Rows.show'); 
       Route::get('create','RowsController@create')->name('Rows.create');
       Route::post('store','RowsController@store')->name('Rows.store');
       Route::get('edit/{row_id}','RowsController@edit')->name('Rows.edit');
       Route::post('update/{row_id}','RowsController@update')->name('Rows.update');
       Route::get('delete/{row_id}','RowsController@delete')->name('Rows.delete');
});



Route::group(['prefix'=>'class'],function(){
    Route::get('/','ClasssController@index')->name('class.index'); 
   Route::get('create','ClasssController@create')->name('class.create');
   Route::post('store','ClasssController@store')->name('class.store');
   Route::get('edit/{class_id}','ClasssController@edit')->name('class.edit');
   Route::post('update/{class_id}','ClasssController@update')->name('class.update');
   Route::get('delete/{class_id}','ClasssController@delete')->name('class.delete');
});


Route::group(['prefix'=>'admin'],function(){
   
});



});

});

});
