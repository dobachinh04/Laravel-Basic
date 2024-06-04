<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// *Đều như nhau:

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

// Route::get('/posts', function () {
//     return "Danh sách bài posts";
// });

Route::post('/posts', [ProductController::class, 'index'])->name('post.idex');
