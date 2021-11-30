<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EkibimizController extends Controller
{
    public function Ekibimiz()
    {
        return view("front.pages.ekibimiz");
    }
}
