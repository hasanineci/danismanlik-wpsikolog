<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EkipController extends Controller
{
    public function Ekip()
    {
        return view('admin.pages.ekip');
    }
}
