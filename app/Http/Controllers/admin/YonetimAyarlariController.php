<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YonetimAyarlariController extends Controller
{
    public function YonetimAyarlari()
    {
        return view('admin.pages.yonetim-ayarlari');
    }
}
