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

Route::get('/hell', function () {
    return 'Hello';
});

Route::get('/hello', function () {
    // metoda get na /hello wyswietla widok ktory jest w resources\views\hello.blade.php 
    return view('subviws.hello');
    // możemy też zmienic . na / return view('subviws/hello');
});