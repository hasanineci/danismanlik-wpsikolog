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
        $ayse = Ekibimiz::where('name', "ayse barkın")->first();
        $ibrahim = Ekibimiz::where('name', "ibrahim halil barkın")->first();
        $abdulselam = Ekibimiz::where('name', "abdülselam altıntaş")->first();
        $count = Ekibimiz::all()->count();
        return view('admin.pages.ekip', compact('ayse', 'ibrahim', 'abdulselam', 'count'));
    }
    public function Ekip_POST()
    {
        # code...
    }
}
