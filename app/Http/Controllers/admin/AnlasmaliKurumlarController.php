<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnlasmaliKurumlar;
use Illuminate\Http\Request;

class AnlasmaliKurumlarController extends Controller
{
    public function AnlasmaliKurumlar_GET()
    {
        $anlasmaliKurumlar = AnlasmaliKurumlar::all();
        return view('admin.pages.anlasmali-kurumlar', compact('anlasmaliKurumlar'));
    }

    public function AnlasmaliKurumlar_POST()
    {
        # code...
    }
}
