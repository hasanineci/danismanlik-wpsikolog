<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YeniGelenMaillerController extends Controller
{
    public function YeniGelenMailler()
    {
        return view('admin.pages.yeni-gelen-mailler');
    }
}
