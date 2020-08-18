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
    return view('Page/home');
});

Route::get('message/{id}/edit', ['user' => 'HomeController@edit','as' => 'message.edit']);


/* Route::get('/Sign_up', function () {
    return view('Sign_up');
}); */




