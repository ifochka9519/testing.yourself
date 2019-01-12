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
})->name('home');
Route::get('right', function () {
    return view('right');
})->name('right');
Route::get('left', function () {
    return view('left');
})->name('left');
Route::get('elements', function () {
    return view('elements');
})->name('elements');

Route::get('create', function () {
    return view('create');
})->name('create');

Route::get('all', function () {
    return view('all');
})->name('all');

Route::get('questions', function () {
    return view('questions');
})->name('questions');
Route::get('add/{id}', 'TestController@add' )->name('add');
Route::get('edit_test/{id}', 'TestController@edit_test' )->name('edit_test');
Route::get('test/{id}', 'TestController@test' )->name('test');
Route::post('add_question', 'TestController@add_question' )->name('add_question');
Route::post('save_question', 'TestController@save_question' )->name('save_question');
Route::get('testing/{id}', 'TestController@testing' )->name('testing');

Route::post('testing/{id}', 'TestController@testing_engine' )->name('engine_test');



Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', 'UserController@register' )->name('register');
Route::post('login', 'UserController@login' )->name('login');
Route::get('log_out', 'UserController@logOut' )->name('log_out');
Route::get('dashboard', 'UserController@dashboard' )->name('dashboard')->middleware('auth');



Route::post('create_title', 'TestController@create' )->name('create_title');