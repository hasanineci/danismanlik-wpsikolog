<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnlasmaliKurumlarController extends Controller
{
    public function AnlasmaliKurumlar()
    {
        return view("front.pages.anlasmali-kurumlar");
    }
}
