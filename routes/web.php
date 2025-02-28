<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', 'index')->name('dashboard.index');
Route::post('/index', 'index')->name('dashboard.index.post');

Route::get('/login', 'login')->name('login');
Route::post('/login', 'login')->name('login.post');

Route::get('/register', 'register')->name('register');
Route::post('/register', 'register')->name('register.post');

Route::get('/forgot-password', 'forgot-password')->name('forgot-password');
Route::post('/forgot-password', 'forgot-password')->name('forgot-password.post');

Route::get('/logout', 'logout')->name('logout');
