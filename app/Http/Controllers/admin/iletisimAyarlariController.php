<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class iletisimAyarlariController extends Controller
{
    public function iletisimAyarlari()
    {
        return view('admin.pages.iletisim-ayarlari');
    }
}
