<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhToanController extends Controller
{
    public function tinhTong($a, $b)
    {
        $sum = $a + $b; // Tính tổng của hai số
        return view('tinh-tong', compact('a', 'b', 'sum')); // Truyền các biến vào view
    }
}
