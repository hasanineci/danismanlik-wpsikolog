<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnlasmaliKurumlar;
use Illuminate\Http\Request;

class AnlasmaliKurumlarController extends Controller
{
    public function AnlasmaliKurumlar_GET()
    {
        return view('admin.pages.anlasmali-kurumlar');
    }

    public function AnlasmaliKurumlar_POST()
    {
        # code...
    }
    
    public function oku_POST(Request $request)
    {
        $anlasmaliKurumlar = AnlasmaliKurumlar::where('id', $request->anlasmali_kurumlar_id)->first();
        return response()->json($anlasmaliKurumlar);
    }
}
