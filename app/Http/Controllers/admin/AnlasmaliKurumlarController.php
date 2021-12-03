<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnlasmaliKurumlarController extends Controller
{
    public function AnlasmaliKurumlar()
    {
        return view('admin.pages.anlasmali-kurumlar');
    }
}
