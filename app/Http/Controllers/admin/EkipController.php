<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ekibimiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EkipController extends Controller
{
    public function Ekip_GET()
    {
        $ayse = Ekibimiz::where('id', 1)->first();
        $ibrahim = Ekibimiz::where('id', 2)->first();
        $abdulselam = Ekibimiz::where('id', 3)->first();
        return view('admin.pages.ekip', compact('ayse', 'ibrahim', 'abdulselam'));
    }
    public function Ekip_POST()
    {
        # code...
    }
}
