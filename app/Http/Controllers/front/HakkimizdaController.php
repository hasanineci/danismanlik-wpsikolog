<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HakkimizdaController extends Controller
{
    public function Hakkimizda()
    {
        return view("front.pages.hakkimizda");
    }
}
