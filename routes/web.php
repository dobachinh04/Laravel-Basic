<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\TinhToanController;
use Illuminate\Support\Facades\Route;

// *Đều như nhau:

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome');

// Route::get('/posts', function () {
//     return "Danh sách bài posts";
// });

// Route::post('/posts', [ProductController::class, 'index'])->name('post.idex');

Route::get('tong/{a}/{b}', [TinhToanController::class, 'tinhTong']);

Route::get('/', function () {
    // $data = [
    //     [
    //         'name' => 'Tin Tức 2',
    //         'image' => 'tintuc2.png'
    //     ],
    //     [
    //         'name' => 'Tin Tức 3',
    //         'image' => 'tintuc3.png'
    //     ],
    //     [
    //         'name' => 'Tin Tức 4',
    //         'image' => 'tintuc4.png'
    //     ],
    // ];

    // DB::table('categories')
    //     ->insert($data);

    $data =
        [
            'name' => 'Haha',
        ];

    DB::table('categories')
        ->where('id', 2)
        ->update($data);

    echo "Thành công!";
});
