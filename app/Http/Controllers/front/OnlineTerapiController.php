<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineTerapiController extends Controller
{
    public function OnlineTerapi()
    {
        return view('front.pages.onlineterapi');
    }
}
