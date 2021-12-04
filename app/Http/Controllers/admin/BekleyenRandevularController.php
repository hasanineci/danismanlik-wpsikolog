<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BekleyenRandevularController extends Controller
{
    public function BekleyenRandevular_GET()
    {
        return view('admin.pages.bekleyen-randevular');
    }

    public function BekleyenRandevular_POST()
    {
        # code...
    }
}
