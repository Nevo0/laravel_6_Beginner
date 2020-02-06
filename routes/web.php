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

Route::get('/hellodata', function () {
    $data=['name'=>'James'];
    // nasze dane dajemy do tablicy naprzykład 

         return view('subviws.hellodata',$data);
        //  przekazujemy je do widoku, w widoku dostajemy sie do zmiennej{{name}}
    
});
Route::get('/controller', 'StartCnotroller@index');
// przekazujemy nazwe controlera i nazwe funkcji ktora ma byc odp
// app\Http\Controllers\StartCnotroller-.php

Route::get('/about', 'BladeCnotroller@about');
// app\Http\Controllers\BladeCnotroller.php index

// Route::view('/about', 'about');
// jezeli mamy tylko sam widok bez danych mozemy skrocic 

Route::get('/services', 'BladeCnotroller@services');
// app\Http\Controllers\BladeCnotroller.php services

// Route::view('/services', 'services');
// jezeli mamy tylko sam widok bez danych mozemy skrocic 


// php artisan
// php artisan serve 
// php artisan help make:controller --pomoc dla wybranej komendy
// php artisan

