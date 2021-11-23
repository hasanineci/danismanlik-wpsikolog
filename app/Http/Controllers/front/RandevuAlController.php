<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandevuAlController extends Controller
{
    public function RandevuAl()
    {
        return view('front.pages.randevu-al');
    }
}
