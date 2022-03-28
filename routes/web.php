<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

/*Route::get('/test',function(){
    echo'Test';
});*/

Route::get('/test',function(){
    return view('test');
});
Route::get('/book',[TestController::class,'Test']);
Route::get('/literature',[TestController::class,'lit']);
Route::get('/novel',[TestController::class,'novel']);
Route::get('/islam',[TestController::class,'islam']);
Route::get('/english',[TestController::class,'eng']);

Route::get('books/tes',[TestController::class,'Test']);
Route::get('layout',[TestController::class,'lay']);
Route::get('books/blayout',[TestController::class,'blay']);

/*Route::get('/admin',[TestController::class,'Test']);
Route::get('/get/posts',[TestController::class,'Posts']);*/
Route::get('/welcome',[TestController::class,'Welcome']);
Route::get('/about',[TestController::class,'aboutUs']);
Route::get('/contact',[TestController::class,'contactUs']);
Route::get('books/b1',[TestController::class,'B1']);
Route::get('books/b2',[TestController::class,'B2']);
Route::get('books/b3',[TestController::class,'B3']);
Route::get('books/b4',[TestController::class,'B4']);
Route::get('books/b5',[TestController::class,'B5']);
Route::get('books/b6',[TestController::class,'B6']);
Route::get('books/b7',[TestController::class,'B7']);
Route::get('books/b8',[TestController::class,'B8']);
Route::get('books/b9',[TestController::class,'B9']);

