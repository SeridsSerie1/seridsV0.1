<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Routes Controller Users
Route::post('register', 'UserController@register')->name('users.register');