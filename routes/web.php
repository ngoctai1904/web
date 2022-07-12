<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\{RegisterController, LoginController};
use App\Http\Controllers\Admin\LoginAdminController;

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

Route::get('admin', function(){
    return view('admin.home');
});

Route::get('/admin/login', [LoginAdminController::class,'index']);

Route::post('/admin/sendLogin', [LoginAdminController::class,'sendLogin'])->name('admin.login.send');

Route::get('/admin/registerAdmin',function(){
    return view('admin.layouts.registerAdmin');
});

Route::get('/', [BookController::class,'index']);

Route::get('/admin/register',function(){
    return view('admin.auth.register');
});

Route::post('sendRegister',[RegisterController::class,'registerUser'])->name('auth.register');

Route::post('sendLogin',[LoginController::class,'loginUser'])->name('auth.login');

Route::get('/about',function(){
    return view('about');
});

Route::get('/list',[BookController::class,'list'])->name('front-list');


Route::get('/books',[BookController::class,'index']);

Route::get('/books/{slug}',[BookController::class,'show']);

Route::get('/contact',function(){
    return view('contact');
});
Route::get('/library',function(){
    return view('library');
});

Route::get('/categories/{slug}',[CategoryController::class,'show']);

Route::get('/authors/{slug}',[AuthorController::class,'show']);


