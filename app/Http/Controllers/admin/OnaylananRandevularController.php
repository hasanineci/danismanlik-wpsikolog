<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Randevular;
use Illuminate\Http\Request;

class OnaylananRandevularController extends Controller
{
    public function OnaylananRandevular_GET()
    {
        $onaylananrandevular = Randevular::where('durum','Okundu')->orderBy('created_at','desc')->get();
        return view('admin.pages.onaylanan-randevular', compact('onaylananrandevular'));
    }

    public function OnaylananRandevular_POST()
    {
        # code...
    }
}
