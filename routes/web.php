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

/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');

Route::get('/', 'WelcomeController');
Route::get('/book', 'BookController@index');
Route::get('/book/{title?}', 'BookController@show');


Route::get('/test_getpost', function() {
    return 'Version A';
});

Route::post('/test_getpost', function() {
    return 'Version B';
});
