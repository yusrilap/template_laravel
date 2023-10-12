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

Route::get('/test', function () {
    return 'Hello World';
});

Route::get('/test2', function() {
 return 'Hello world Hello world Hello world Hello world';
});

// Route::redirect('/test', '/test2');

Route::view('/greeting', 'greeting');

Route::view('/greeting', 'greeting', ['name' => 'LABTIF']);