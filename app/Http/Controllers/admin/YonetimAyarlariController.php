<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Referanslar;
use App\Models\SertifikaOduller;
use App\Models\YonetimAyarlari;
use Illuminate\Http\Request;

class YonetimAyarlariController extends Controller
{
    public function YonetimAyarlari_GET()
    {
        $referanslar = Referanslar::all();
        $yonetimAyarlari = YonetimAyarlari::find(1);
        $sertifikaOduller = SertifikaOduller::all();
        return view('admin.pages.yonetim-ayarlari', compact('referanslar', 'yonetimAyarlari', 'sertifikaOduller'));
    }
    
    public function YonetimAyarlari_POST()
    {
        # code...
    }
}
