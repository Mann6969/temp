<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
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

// Route::get('/', function () {
//     return view('users.home.dashboard');
// });

Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/products', [UserController::class, 'productDisplay'])->name('product.index');
Route::get('/product', [UserController::class, 'productSingle'])->name('product.display');
Route::get('/blog-detail', [UserController::class, 'blog_detail'])->name('blog_detail');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
