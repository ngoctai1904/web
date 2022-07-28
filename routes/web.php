<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\{RegisterController, LoginController, CartController};
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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

Route::get('/admin/login', [LoginAdminController::class,'index'])->name('admin.auth.login');

Route::post('/admin/sendLogin', [LoginAdminController::class,'sendLogin'])->name('admin.login.send');

Route::get('/admin/registerAdmin',function(){
    return view('admin.layouts.registerAdmin');
});

Route::post('/admin/auth/register', [LoginAdminController::class, 'register'])->name('admin.auth.register');

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

// Router::get('/contact',[ContactController::class,'contact']);
Route::post('send-message',[Controller::class,'sendEmail'])->name('contact.send');

// Route::get('/admin/login',function(){
//     return view('admin.auth.login');
// })->name('admin.login');

//Cart
Route::get('/cart', [CartController::class, 'list'])->name('cart.list');
Route::get('/cart/push/{id}',[CartController::class,'push'])->name('cart.push');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::prefix('books')->group(function () {
        Route::get('/', [AdminBookController::class, 'list'])->name('admin.books.list');
        Route::get('/add', [AdminBookController::class, 'create'])->name('admin.books.create');
        Route::post('/add', [AdminBookController::class, 'store'])->name('admin.books.store');
        Route::get('/{id}', [AdminBookController::class, 'show'])->name('admin.books.edit');
        Route::post('/{id}',[AdminBookController::class, 'update'])->name('admin.books.update');
        Route::DELETE('/{id}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
        // Route::get('/add', [AdminBookController::class, 'edit'])->name('admin.books.edit');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.users.list');
        Route::get('/add', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/add', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/{id}', [AdminUserController::class, 'show'])->name('admin.users.edit');
        Route::POST('/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::DELETE('/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });
});

