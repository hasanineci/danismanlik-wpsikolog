<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GizlilikPolitikamizController extends Controller
{
    public function GizlilikPolitikamiz()
    {
        return view("front.pages.gizlilik-politikamiz");
    }
}
