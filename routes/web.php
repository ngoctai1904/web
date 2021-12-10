<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/list',[BookController::class,'list']);

Route::get('/books',[BookController::class,'index']);

Route::get('/books/{slug}',[BookController::class,'show']);

Route::get('/contact',function(){
    return view('contact');
});
Route::get('/library',function(){
    return view('library');
});

Route::get('/categories/{slug}' , [CategoryController::class,'show']);

