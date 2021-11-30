<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HizmetlerimizController extends Controller
{
    public function Hizmetlerimiz()
    {
        return view("front.pages.hizmetlerimiz");
    }
}
