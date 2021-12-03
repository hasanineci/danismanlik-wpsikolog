<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnaylananRandevularController extends Controller
{
    public function OnaylananRandevular()
    {
        return view('admin.pages.onaylanan-randevular');
    }
}
