<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Randevular;
use Illuminate\Http\Request;

class BekleyenRandevularController extends Controller
{
    public function BekleyenRandevular_GET()
    {
        $onaylananrandevular = Randevular::where('durum','Okunmadı')->orderBy('created_at','desc')->get();
        return view('admin.pages.bekleyen-randevular',compact('onaylananrandevular'));
    }

    public function BekleyenRandevular_POST()
    {
        # code...
    }
}
