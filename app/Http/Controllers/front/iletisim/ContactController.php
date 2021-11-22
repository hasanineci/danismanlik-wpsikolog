<?php

namespace App\Http\Controllers\front\iletisim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function iletisim()
    {
        return view('front.iletisim.iletisim');
    }
}
