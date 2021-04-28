<?php
// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'foo' => 'its data',
    ]);
});

Route::get('/users', 'App\Http\Controllers\UsersController@index');

Route::get('/dial', 'App\Http\Controllers\DialController@index');

Route::get('/phones', 'App\Http\Controllers\PhonesController@index')->name('phones.index');
Route::get('/phones/create', 'App\Http\Controllers\PhonesController@create');
Route::post('/phones', 'App\Http\Controllers\PhonesController@store');
Route::get('/phones/{phone}/edit', 'App\Http\Controllers\PhonesController@edit');
Route::get('/phones/{phone}', 'App\Http\Controllers\PhonesController@update');
Route::get('/phones/{phone}', 'App\Http\Controllers\PhonesController@destroy');
