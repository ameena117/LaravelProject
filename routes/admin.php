<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['admin.auth','auth:admin'])->group(function(){
    //cliens
    //Route::get('/', 'HomeController@index')->name('home');
    Route::get('/clients', 'ClientController@index')->name('clients');
    Route::get('/clients/delete/{id}', 'ClientController@delete')->name('clients.delete');

    //books
    Route::get('/books', 'BookController@index')->name('book');
    Route::get('/books/delete/{id}', 'BookController@delete')->name('books.delete');
    
    Route::get('/books/view/{id}', 'BookController@view')->name('books.view');

    Route::get('/books/edit/{id}', 'BookController@edit')->name('books.edit');
    Route::post('/books/update/{id}', 'BookController@update')->name('books.update');

    Route::get('/books/create', 'BookController@create')->name('books.create');
    Route::post('/books/store', 'BookController@store')->name('books.store');
});

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
