<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GelenMaillerController extends Controller
{
    public function GelenMailler()
    {
        return view('admin.pages.gelen-mailler');
    }
}
