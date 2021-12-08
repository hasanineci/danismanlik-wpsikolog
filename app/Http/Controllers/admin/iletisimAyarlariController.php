<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\iletisim;
use Illuminate\Http\Request;

class iletisimAyarlariController extends Controller
{
    public function iletisimAyarlari_GET()
    {
        return view('admin.pages.iletisim-ayarlari');
    }
    public function iletisimAyarlari_POST(Request $request)
    {
        $validated = $request->validate([
            "facebook" => "max:255",
            "instagram" => "max:255",
            "twitter" => "max:255",
            "linkedin" => "max:255",
            "adres" => "required|max:255",
            "telefon" => "required|max:255",
            "email" => "max:255",
        ]);

        if (iletisim::latest()->first() != null) {
            $update= iletisim::latest()->update([
                "facebook" => $request->facebook,
                "instagram" => $request->instagram,
                "twitter" => $request->twitter,
                "linkedin" => $request->linkedin,
                "adres" => $request->adres,
                "telefon" => $request->telefon,
                "email" => $request->email,
            ]);
        }else{
            $insert = new iletisim();
            $insert->facebook = $request->facebook;
            $insert->instagram = $request->instagram;
            $insert->twitter = $request->twitter;
            $insert->linkedin = $request->linkedin;
            $insert->adres = $request->adres;
            $insert->telefon = $request->telefon;
            $insert->email = $request->email;
            $insert->save();
        }
        
        return redirect()->back()->with('toastr.success', 'İşlem Başarılı, iletişim bilgileri güncellendi');
    }
}
