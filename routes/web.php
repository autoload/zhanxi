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

use App\Task;

Route::get('/', function () {
    $name = 'wanguo';
    $age = 30;
    return view('welcome',['name'=>$name,'age'=>$age]);
});
Route::get('tasks','TasksController@index');
Route::get('tasks/{task}','TasksController@show');

Route::any('uploads/upload','UploadsController@upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
