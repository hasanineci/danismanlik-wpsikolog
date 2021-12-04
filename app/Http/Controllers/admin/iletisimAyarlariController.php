<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\iletisim;
use Illuminate\Http\Request;

class iletisimAyarlariController extends Controller
{
    public function iletisimAyarlari_GET()
    {
        $iletisim = iletisim::find(1);
        return view('admin.pages.iletisim-ayarlari', compact('iletisim'));
    }
    public function iletisimAyarlari_POST()
    {
        # code...
    }
}
